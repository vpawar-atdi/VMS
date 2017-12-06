<?php

require_once '../businessLayer/RegisterBL.php';
require_once '../businessLayer/LoginBL.php';


/**
 * Define error codes
 */
$resCodes = [
    'ERR_FUNCTION_NOT_PROVIDED' => ['code' => -1, 'message' => 'Function name not provided'],
    'ERR_FUNCTION_NOT_AVAILABLE' => ['code' => -2, 'message' => 'Function name not recognized'],
    'ERR_EMPTY_RESULT' => ['code' => -3, 'message' => 'Empty result returned by function'],
    'ERR_UNEXPECTED_RESULT' => ['code' => -4, 'message' => 'Unexpected result returned by function'],
    'ERR_MISSING_PARAMETERS' => ['code' => -10, 'message' => 'Missing arguments for the specified function'],
    'ERR_INVALID_PARAMETERS' => ['code' => -11, 'message' => 'Invalid arguments for the specified function'],
];

/**
 * Check if we have data for call
 */
$hasParams = false;
if (!empty($_REQUEST)) {
    $params = $_REQUEST;
    $hasParams = true;
}

if (!$hasParams) {
    $reqBody = file_get_contents('php://input');
    $params = json_decode($reqBody, true);

    if ($params === null) {
        outputError(-1000 - json_last_error(), json_last_error_msg());
        die();
    }

    $hasParams = true;
}

/**
 * Perform initial parameter checks (function name)
 */
// check if we have a function name
if (!isset($params['function']) || empty($params['function'])) {
    outputError($resCodes['ERR_FUNCTION_NOT_PROVIDED']['code'], $resCodes['ERR_FUNCTION_NOT_PROVIDED']['message']);
    die();
}

// check if function exists
if (!function_exists('api_' . $params['function'])) {
    outputError($resCodes['ERR_FUNCTION_NOT_AVAILABLE']['code'], $resCodes['ERR_FUNCTION_NOT_AVAILABLE']['message'] . ' [' . $params['function'] . ']');
    die();
}

$funcName = 'api_' . $params['function'];

$config = ['codes' => $resCodes, 'starttime' => microtime(true)];
$config['logpath'] = $loc_api_logpath ?? false; // check if we should log API calls

$funcName($config, $params);

/**
 * Log the API call to the a file if path is provided in $config['logpath']
 * $config['logpath'] takes its value from $loc_api_logpath
 *
 * @param array $config
 * @param array $p
 * @param string $customfname Uses the custom function name provided for the log
 *
 * @return int
 */
function write_log($config, $p, $customfname = null) {
    if ($config['logpath'] == false) {
        return 0;
    }

    $fh = fopen($config['logpath'], 'a');
    if (!$fh) {
        return 0;
    }

    $customfname = is_null($customfname) ? $p['function'] : $customfname;

    $exectime = microtime(true) - $config['starttime'];
    $str = date('Y-m-d H:i:s') . '|' . $p['user'] . '|' . $_SERVER['REMOTE_ADDR'] . '|' . $customfname . '|' . $exectime . "\n";
    fwrite($fh, $str);
    fclose($fh);
}

/**
 * Check if list of arguments has been provided in request parameters
 *
 * @param array $config   Configuration array
 * @param array $p        Request parameters
 * @param array $arg_list Argument list
 */
function check_arguments($config, $p, $arg_list) {
    $missingArgs = [];
    foreach ($arg_list as $arg) {
        if (!isset($p[$arg]) || trim((string) $p[$arg]) == '') {
            $missingArgs[] = $arg;
        }
    }

    if (count($missingArgs) != 0) {
        outputError($config['codes']['ERR_MISSING_PARAMETERS']['code'], $config['codes']['ERR_MISSING_PARAMETERS']['message'] . ' [' . join(', ', $missingArgs) . ']');
        die();
    }
}

/**
 * Output a JSON structure containing an error message and additional information
 *
 * @param $code    Error code
 * @param $message Error message in plain English
 *
 * @return bool Always true
 */
function outputError($code, $message) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['code' => $code, 'message' => $message]);

    return true;
}


//================================================Start register user=====================================================
/**
 * <h1>register_user</h1>
 * <p>Register new user in cLMS</p>
 * <b>Parameters</b><br>
 * <table>
 * <tr><th class="col_key">Key</th><th class="col_datatype">Data Type</th><th class="col_desc">Description</th><th class="col_defval">Default Value</th><th class="col_unit">Unit</th></tr>
 * <tr><td>fname</td><td>string</td><td><p>First Name</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 * <tr><td>lname</td><td>string</td><td><p>Last Name</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 * <tr><td>mobile</td><td>string</td><td><p>Mobile number</td><td></td><td>&nbsp;</td></tr>
 * <tr><td>email</td><td>string</td><td><p>Email</p></td><td></td><td>&nbsp;</td></tr>
 * <tr><td>password</td><td>string</td><td><p>Password</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 * <tr><td>domainName</td><td>string</td><td><p>Domain name</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 * <tr><td>orgID</td><td>string</td><td><p>Organization ID</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 * </table>
 * <b>Returns</b><br>
 * <table>
 * <tr><th class="col_key">Key</th><th class="col_datatype">Data Type</th><th class="col_ret_desc">Description</th><th class="col_unit">Unit</th></tr>
 * <tr><td>statusCode</td><td>int</td><td>200</td><td>dBm / dBu</td></tr>
 * <tr><td>message</td><td>int</td><td>success</td><td>dBm / dBu</td></tr>
 * </table>
 * <b>Errors</b><br>
 * <table>
 * <tr><th class="col_err_code">Code</th><th class="col_desc">Description</th></tr>
 * <tr><td>statusCode</td><td>101</td></tr>
 * <tr><td>message</td><td>Corresponding error message</td></tr>
 * </table>
 */
function    api_register_user($config, $p) {
    check_arguments($config, $p, ['name', 'email', 'password' ,'mobile']);
    $objUserBL = new RegisterBL();
    $p['password']= password_hash($p['password'], PASSWORD_DEFAULT);
    $result = $objUserBL->registerUser($p);
    if ($result == 1) {
        $response = [
            'statusCode' => 200,
            'message' => 'success'
        ];
    } else {
        $response = [
            'statusCode' => 101,
            'message' => $result
        ];
    }
    echo json_encode($response, JSON_PRETTY_PRINT);
}
//==================================End register user=================================================



//================================================Start register user=====================================================
/**
 * <h1>register_user</h1>
 * <p>Register new user in cLMS</p>
 * <b>Parameters</b><br>
 * <table>
 * <tr><th class="col_key">Key</th><th class="col_datatype">Data Type</th><th class="col_desc">Description</th><th class="col_defval">Default Value</th><th class="col_unit">Unit</th></tr>
 * <tr><td>fname</td><td>string</td><td><p>First Name</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 * <tr><td>lname</td><td>string</td><td><p>Last Name</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 * <tr><td>mobile</td><td>string</td><td><p>Mobile number</td><td></td><td>&nbsp;</td></tr>
 * <tr><td>email</td><td>string</td><td><p>Email</p></td><td></td><td>&nbsp;</td></tr>
 * <tr><td>password</td><td>string</td><td><p>Password</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 * <tr><td>domainName</td><td>string</td><td><p>Domain name</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 * <tr><td>orgID</td><td>string</td><td><p>Organization ID</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 * </table>
 * <b>Returns</b><br>
 * <table>
 * <tr><th class="col_key">Key</th><th class="col_datatype">Data Type</th><th class="col_ret_desc">Description</th><th class="col_unit">Unit</th></tr>
 * <tr><td>statusCode</td><td>int</td><td>200</td><td>dBm / dBu</td></tr>
 * <tr><td>message</td><td>int</td><td>success</td><td>dBm / dBu</td></tr>
 * </table>
 * <b>Errors</b><br>
 * <table>
 * <tr><th class="col_err_code">Code</th><th class="col_desc">Description</th></tr>
 * <tr><td>statusCode</td><td>101</td></tr>
 * <tr><td>message</td><td>Corresponding error message</td></tr>
 * </table>
 */
function api_login_user($config, $p) {
    check_arguments($config, $p, ['email', 'password']);
    $objLogin = new LoginBL();
    
    $result = $objLogin->loginUser($p);
    if ($result == 1) {
        $response = [
            'statusCode' => 200,
            'message' => 'success'
        ];
    } else {
        $response = [
            'statusCode' => 101,
            'message' => $result
        ];
    }
    echo json_encode($response, JSON_PRETTY_PRINT);
}
//==================================End register user=================================================



//================================================Start register user=====================================================
/**
 * <h1>register_user</h1>
 * <p>Register new user in cLMS</p>
 * <b>Parameters</b><br>
 * <table>
 * <tr><th class="col_key">Key</th><th class="col_datatype">Data Type</th><th class="col_desc">Description</th><th class="col_defval">Default Value</th><th class="col_unit">Unit</th></tr>
 * <tr><td>fname</td><td>string</td><td><p>First Name</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 * <tr><td>lname</td><td>string</td><td><p>Last Name</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 * <tr><td>mobile</td><td>string</td><td><p>Mobile number</td><td></td><td>&nbsp;</td></tr>
 * <tr><td>email</td><td>string</td><td><p>Email</p></td><td></td><td>&nbsp;</td></tr>
 * <tr><td>password</td><td>string</td><td><p>Password</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 * <tr><td>domainName</td><td>string</td><td><p>Domain name</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 * <tr><td>orgID</td><td>string</td><td><p>Organization ID</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 * </table>
 * <b>Returns</b><br>
 * <table>
 * <tr><th class="col_key">Key</th><th class="col_datatype">Data Type</th><th class="col_ret_desc">Description</th><th class="col_unit">Unit</th></tr>
 * <tr><td>statusCode</td><td>int</td><td>200</td><td>dBm / dBu</td></tr>
 * <tr><td>message</td><td>int</td><td>success</td><td>dBm / dBu</td></tr>
 * </table>
 * <b>Errors</b><br>
 * <table>
 * <tr><th class="col_err_code">Code</th><th class="col_desc">Description</th></tr>
 * <tr><td>statusCode</td><td>101</td></tr>
 * <tr><td>message</td><td>Corresponding error message</td></tr>
 * </table>
 */
function  api_add_user($config, $p) {
    check_arguments($config, $p, ['name','email', 'password' ,'mobile','role']);
    $objUserBL = new RegisterBL();
    $p['password']= password_hash($p['password'], PASSWORD_DEFAULT);
    $result = $objUserBL->registerUser($p);
    if ($result == 1) {
        $response = [
            'statusCode' => 200,
            'message' => 'success'
        ];
    } else {
        $response = [
            'statusCode' => 101,
            'message' => $result
        ];
    }
    echo json_encode($response, JSON_PRETTY_PRINT);
}
//==================================End register user=================================================





?>
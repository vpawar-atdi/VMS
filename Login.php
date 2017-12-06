<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Login Page - Ace Admin</title>
        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
        <link rel="stylesheet" href="assets/css/ace.min.css" />
        <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
    </head>

    <body class="login-layout light-login">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <i class="ace-icon fa fa-leaf green"></i>
                                    <span class="red">Ace</span>
                                    <span class="white" id="id-text2">Application</span>
                                </h1>
                                <h4 class="blue" id="id-company-text">&copy; Company Name</h4>
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header blue lighter bigger">
                                                <i class="ace-icon fa fa-coffee green"></i>
                                                Please Enter Your Information
                                            </h4>

                                            <div class="space-6"></div>

                                            <form method="POST">
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" id="usr" name="email" placeholder="Enter your email" 
                                                                   value="<?php echo $_COOKIE["memberUsername"];?>" onkeyup="hideError()"/>
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" id="pwd" name="password" placeholder="Password"
                                                                   value="<?php echo $_COOKIE["memberPassword"];?>" onkeyup="hideError()"/>
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>

                                                    <div class="space"></div>

                                                    <div class="clearfix">
                                                        <label class="inline">
                                                            <input type="checkbox" class="ace" name="remember" />
                                                            <span class="lbl"> Remember Me</span>
                                                        </label>

                                                        <button type="submit" name="submit" class="width-35 pull-right btn btn-sm btn-primary" onclick="return validate()">
                                                            <i class="ace-icon fa fa-key"></i>
                                                            <span class="bigger-110">Login</span>
                                                        </button>
                                                    </div>

                                                    <div class="space-4"></div>
                                                </fieldset>
                                            </form>
                                        </div>

                                        <div class="toolbar clearfix">
                                            <div>
                                                <a href="ForgotPassword.php"  class="forgot-password-link">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    I forgot my password
                                                </a>
                                            </div>

                                            <div>
                                                <a href="Register.php" class="user-signup-link">
                                                    I want to register
                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $session = "default";
            if (!empty($_POST['remember'])) {
                $remember = true;
            } else {
                $remember = false;
            }

            $password = $_POST['password'];

            $service_url = 'http://localhost/vms/api/server.php';
            $curl = curl_init($service_url);
            $curl_post_data = array(
                "function" => "login_user",
                "email" => $email,
                "password" => $password
            );
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
            $curl_response = curl_exec($curl);
            $result = json_decode($curl_response);
            curl_close($curl);
            if (isset($result->statusCode)) {
                if ($result->statusCode == 200) {
                    session_start();
                    $_SESSION["userDetails"] = $result->result[0];
                    if ($remember) {
                        setcookie('memberUsername', $email, time() + 86400 * 30, "/");
                        setcookie('memberPassword', $password, time() + 86400 * 30, "/");
                    }

                    header("Location: Dashboard.php");
                    exit();
                } else {
                    header("Location: Error.php");
                }
            }
        }
        ?>








        <script src="assets/js/jquery-2.1.4.min.js"></script>

        <script type="text/javascript">
                                                            if ('ontouchstart' in document.documentElement)
                                                                document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>

        <script type="text/javascript">
            jQuery(function ($) {
                $(document).on('click', '.toolbar a[data-target]', function (e) {
                    e.preventDefault();
                    var target = $(this).data('target');
                    $('.widget-box.visible').removeClass('visible');//hide others
                    $(target).addClass('visible');//show target
                });
            });
        </script>
        <script type="text/javascript">
            function validate()
            {
                var email = document.getElementById('usr').value;
                var password = document.getElementById('pwd').value;
                var wrongCount = 0;
                if (email === "")
                {
                    document.getElementById('usr').style.borderColor = "red";
                    wrongCount++;
                    return false;
                }
                if (password === "")
                {
                    document.getElementById('pwd').style.borderColor = "red";
                    wrongCount++;
                    return false;
                }
//                if (wrongCount == 0) {
//                    var http = new XMLHttpRequest();
//                    var url = "http://localhost/vms/api/server.php";
//                    var params = "function=login_user&email="+ email + "&password=" + password;
//                    http.open("POST", url, true);
//                    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//                    http.onreadystatechange = function () {
//                        if (http.readyState == 4 && http.status == 200) {
//                            obj = JSON.parse(http.response);
//                            alert(obj.statusCode);
//                        }
//                    }
//                    http.send(params);
//                }
            }
            function hideError()
            {
                var email = document.getElementById('usr').value;
                var password = document.getElementById('pwd').value;

                if (email != "")
                {
                    document.getElementById('usr').style.borderColor = "";
                }

                if (password != "")
                {
                    document.getElementById('pwd').style.borderColor = "";
                }
            }

        </script>
    </body>
</html>

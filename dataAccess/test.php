<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "vms_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$insertArr['user_id'] ="1234";
$insertArr['name'] ="abcd";
$insertArr['emal'] ="test@rrr.vom";
$insertArr['password'] ="12345";

        
        
        $keys = implode(', ', array_keys($insertArr));
        $values = "'" . implode("','", array_values($insertArr)) . "'";
       //$result=$conn->query("INSERT INTO vms_users($keys) VALUES ($values)");
       //echo $result;
       print_r($keys);
       print_r($values);


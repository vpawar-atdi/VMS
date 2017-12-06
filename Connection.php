<?php

Class Connection {

    function connectionDB() {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "vms_db";

        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            return $conn;
        }
    }

}

?>
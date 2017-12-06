<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserDA
 *
 * @author Chirag 
 */

include_once '../Connection.php';
class UserDA {

    function insert_userDB($insertArr) {
        $objConnection=new Connection();
        $conn=$objConnection->connectionDB();
        date_default_timezone_set('Asia/Kolkata');
        $date = new DateTime();           
           $result=$conn->query("call VMS_Register_User('".$insertArr['name']."','".$insertArr['email']."','".$insertArr['password']."','".$insertArr['mobile']."','".$insertArr['role']."','".$insertArr['status']."','".$insertArr['created_by']."',@out_ret)");        
           return $result;
    }
    
    
    function select_userDB($insertArr){
        $validUser=0;
        $objConnection=new Connection();
        $conn=$objConnection->connectionDB($connection);
        $result = $conn->query("select * from vms_users");
        return $result;
    }
    
    function validae_login($insertArr){
        
        $objConnection=new Connection();
        $conn=$objConnection->connectionDB();
        $result = $conn->query("select * from vms_users");
        return $result;
    }
}

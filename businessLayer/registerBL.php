<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Registering organization, checking domain name availability, checking username availability,
 * Authenticate user name and password while logging in.
 *
 * @author Chirag
 */
require_once '../dataAccess/UserDA.php';
class RegisterBL {

    function registerUser($p) {
        if($p['role']!=""){
            
        }else{
            $p['role'] = "Site Incharge";
        }
        
        $p['created_by']="admin";
        $p['status'] = 1;
        date_default_timezone_set('Asia/Kolkata');
        $date = new DateTime();
        $p['create_date'] = $date->format('d-m-Y\TH:i:s.u');
        $p['mod_date'] = $date->format('d-m-Y\TH:i:s.u');
        $objUserDA = new userDA();
        $objResult = $objUserDA->insert_userDB($p);
        if($objResult){
            return 1;
        }else{
            return 0;
        }
        
    }
    

}

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
include_once '../Connection.php';

class LoginBL {

    function loginUser($p) {
        $objConnection=new Connection();
        //$conn=$objConnection->connectionDB($connection);
        $validUser = 0;
        $objUserDA = new userDA();
        $objResult = $objUserDA->select_userDB($p);
        while ($row = $objResult->fetch_assoc()) {
            if ($row['email'] == $p['email'] && password_verify($p['password'], $row['password'])) {
                $validUser = 1;
                break;
            } else {
                $validUser = 0;
            }
        }
        if ($validUser) {
            return 1;
        } else {
            return 0;
        }
    }

}

<?php 

    // FUNZIONE PER GENERARE UNA PASSWORD CASUALE
    function generatePassword($length){
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
        $password = '';
        
        for($i = 0; $i < $length; $i++){
            $randomIndex = rand(0, strlen($chars) - 1);
            $password .= $chars[$randomIndex];
        }
        
        return $password;
    }
?>
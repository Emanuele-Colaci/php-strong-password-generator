<?php 

    // FUNZIONE PER GENERARE UNA PASSWORD CASUALE
    function generatePassword($length, $include_numbers, $include_letters, $include_symbols, $allow_repeating){

        $numbers = '0123456789';
        $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $symbols = '!@#$%^&*()';
    
        $chars = '';
        if($include_numbers){
            $chars .= $numbers;
        }
        if($include_letters){
            $chars .= $letters;
        }
        if($include_symbols){
            $chars .= $symbols;
        }
    
        $password = '';
        $chars_length = strlen($chars);
    
        for($i = 0; $i < $length; $i++){
            if($chars_length > 0){
                $randomIndex = rand(0, $chars_length - 1);
                $password .= $chars[$randomIndex];
    
                if(!$allow_repeating){
                    $chars = substr_replace($chars, '', $randomIndex, 1);
                    $chars_length--;
                }
            }
        }
    
        return $password;
    }
?>
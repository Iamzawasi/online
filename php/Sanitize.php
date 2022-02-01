<?php

class sanitizing{
    public static function string($getString){
        return filter_var($getString, FILTER_SANITIZE_STRING);
    }
    public static function email($getEmail){
        return filter_var($getEmail, FILTER_SANITIZE_EMAIL);
    }
    public static function number($getNumber){
        return filter_var($getNumber, FILTER_SANITIZE_NUMBER_INT);
    }

}
// $string="<h1> this is santize </h1> 1254->=+ ! @#$%^&*() aaz@gmail.com";
// // echo sanitizing::string($string);
//  // echo sanitizing::number($string);
//  echo sanitizing::email($string);

?>
<?php
/*
 * Por algum motivo que não identifiquei, o meu autoload estava dando problema nas classes
 * Mas deixei aqui pra vocês verem que eu já conheço este recurso e só preciso lapidar o uso.
 * 
 * */

spl_autoload_register(function($class){
    if(file_exists('classes/'.$class.'.php')){
        require 'classes/'.$class.'.php';
    }

});
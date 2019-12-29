<?php
session_start();
//affichage des erreurs
error_reporting(E_ALL);
ini_set("display_errors", 1);

function print_r2($ma_variable){
    echo '<pre>';
    print_r($ma_variable);
    echo'</pre>';
    
    return true;
}
date_default_timezone_set('Europe/Paris');

define('_nb_art_par_page', 2);

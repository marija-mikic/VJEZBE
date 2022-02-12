<?php

ini_set('display_errors', 1);           //
ini_set('display_startup_errors',1);    // pokazuje greške u kodu
error_reporting(E_ALL);                 //

session_start();

define('BP',__DIR__ . DIRECTORY_SEPARATOR); //BP (base path) string -globalna varijabla, __DIR-direktorij datoteke
define ('BP_APP', __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR);//uzmi direktorij 

$putanje=implode( //imlode-ljepilo-uzmi ljepilo
    PATH_SEPARATOR, //uzima djeliće
    [
        BP_APP . 'model',
        BP_APP . 'controller',
        BP_APP . 'core'
        ]
);

set_include_path ($putanje);// postavlja opciju konfiguracije za vrijeme trajanja skripte

spl_autoload_register(function($klasa){   ///  spl- funkciju registrira kao implementaciju--fukcija prima funkciju kao parametar
    $putanje =explode(PATH_SEPARATOR . get_include_path());
    foreach($putanje as $p){
        $datoteka=$p . DIRECTORY_SEPARATOR . $klasa . 'php';
        if(file_exists($datoteka)){
            include_once $datoteka;
            break;
        }
    }
});

App::start();   //core/App- function start poziv





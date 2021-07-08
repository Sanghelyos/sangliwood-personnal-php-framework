<?php

    // Obsolète
// require_once('src/DefaultApp/Autoload.php');

require_once('vendor/autoload.php');

use App\DefaultApp\IndexSettings;
use App\DefaultApp\LocalesHandler;
use App\DefaultApp\Routes;


IndexSettings::Execute();
LocalesHandler::Set_locales();
    /*/////////////////////////////
    * Démarrage de session
    *//////////////////////////////
session_start();

    /*/////////////////////////////
    * Contrôleur de gestion des routes
    *//////////////////////////////
Routes::Execute();

?>
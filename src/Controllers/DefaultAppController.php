<?php

//  Définition du namespace
namespace App\Controllers;
use App\DefaultApp\Renderer;

//  Définition de la classe (ici controller et non model)
class DefaultAppController{

    public function NotFound () {

        Renderer::Render('404');
    }
}
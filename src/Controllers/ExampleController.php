<?php

//  Définition du namespace
namespace App\Controllers;
use App\DefaultApp\Renderer;
use App\Models\ExampleNews;

//  Définition de la classe (ici controller et non model)
class ExampleController {

    // protected $_modelName = \Models\Home::class;

    public function index () {

        $news = new ExampleNews();
        $newsData = $news->getNews();

        Renderer::Render('example', ['news' => $newsData]);
    }

}
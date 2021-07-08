<?php use App\DefaultApp\ErrorHandler; ?>

<div id="home_title" class="text-shadow-white">
    <h1>Oups</h1>
    <h4>On dirait que cette page n'existe pas :/</h4>
    <h3><?php ErrorHandler::Error_print(); ?></h3>
    <hr style="width: 70%;">
    <div id="menu_bar" class="text-shadow-white">
        <a href="index.php">Page d'accueil</a>
        <a href="https://github.com/Sanghelyos/SangliMVC/wiki/Documentation">Documentation</a>
        <a href="https://github.com/Sanghelyos/SangliMVC">GitHub</a>
    </div>
</div>
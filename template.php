<?php

function render($view, $vars = []){
    extract($vars);

    //Header
    require __DIR__.'/partials/header.php';
    //Conteudo
    require __DIR__.'/views/'. $view . '.php';
    //Footer
    require __DIR__.'/partials/footer.php';
}
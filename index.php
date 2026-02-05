<?php
    require __DIR__.'/template.php';
    require __DIR__.'/lib.php';

    $data = get_current_poll();

    render('home', [
        'title'=>'Home do Site',
        'hero'=>'Bem-vindo',
        'heroLead'=>'Site de Notícias',
        'data' => $data,
        'withWidget' => true,
    ]);

?>
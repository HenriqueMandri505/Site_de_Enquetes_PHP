<?php
    require __DIR__.'/template.php';
    require __DIR__.'/lib.php';

    render('create', [
        'title'=>'Criação de enquete',        
        'hero'=>'Criar enquete',
        'heroLead'=>'Crie sua nova enquete',
        'withWidget' => false,
    ]);

?>
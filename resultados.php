<?php
    require __DIR__.'/template.php';
    require __DIR__.'/lib.php';

    $data = get_current_poll();

    render('results', [
        'title'=>'Resultados da Enquete',
        'hero'=>'Resultados',
        'heroLead'=>'Veja os resultados da enquete:',
        'data'=> $data,
        'withWidget' => false,
    ]);

?>
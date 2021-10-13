<?php

    //raccolgo i dati da inviare
    require __DIR__ . '/../data/database.php';

    //setto la risposta con protocollo json
    header('Content-Type: application/json');

    //invio la risposta
    echo json_encode($db);

?>
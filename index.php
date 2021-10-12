<?php 
    include __DIR__ . '/partials/database.php';

    foreach($db as $song){
        echo 'Titolo: ' . $song['title'].'</br>';
        echo 'Autore: ' . $song['author'].'</br>';
        echo 'Genere: ' . $song['genre'].'</br>';
        echo 'Anno: ' . $song['year'].'</br></br>';    
    }
?>
<?php 
    include __DIR__ . '/partials/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <header>
        <div class="img-logo">
            <img src="img/logo.png" alt="logo spotify">
        </div>
    </header>
    <main>
        <div class="songs-container">
            <?php
            foreach($db as $song){
                echo "
                <div class='single-song'>
                    <div class='image'>
                        <img src={$song['poster']} alt='poster {$song['title']}'>
                        <h3 class='title'>
                            {$song['title']}
                        </h3>
                        <div>
                            <span class='author'>
                                {$song['author']}
                            </span>
                            <span class='year'>
                                {$song['year']}
                            </span>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>
        </div>
    </main>
</body>
</html>
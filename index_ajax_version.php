<?php 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>PHP Dischi</title>
</head>
<body>
    <div id="root">
        <header>
            <div class="img-logo">
                <img src="img/logo.png" alt="logo spotify">
            </div>
        </header>
        <main>
            <div class="songs-container">
                    <div v-for="song in songs" class='single-song'>
                        <div class='image'>
                            <img :src="song.poster" :alt="song.title">
                            <h3 class='title'>
                                {{song.title}}
                            </h3>
                            <div>
                                <span class='author'>
                                    {{song.author}}  
                                </span>
                                <span class='year'>
                                    {{song.year}} 
                                </span>
                            </div>
                        </div>
                    </div>
                
            </div>
        </main>
    </div>
    <script src="js/main.js"></script>
</body>
</html>
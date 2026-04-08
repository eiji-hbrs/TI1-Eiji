<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <?php
    include ROOT_PATH . "/view/inc/entete.php";
    ?>

    
    </header>
    <?php
    include ROOT_PATH . "/view/inc/menu.php";
    ?>
    
    
    <div class="corpsComplet">   
        <h2>Galerie Photo</h2>
        <main>
            <div class="galerie">
                <img src="./img/480px_Budapest_Hungary.jpg" alt=>
                <img src="./img/480px_Budapest_National_Theatre.jpg">
            </div>    
            <div class="galerie">
                <img src="./img/480px_Budapest_Obuda_town_hall.jpg">
                <img src="./img/480px_PestiVigadoFotoThalerTamas.jpg">
            </div>
            <div class="galerie">
                <img src="./img/480px_Szabadság_híd.jpg">
                <img src="./img/480px_Vajdahunyad_vára">
            </div>     
        </div>
    </main>
</body>
</html>
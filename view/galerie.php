<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst($_GET ['p'])?></title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <?php
        include ROOT_PATH . "/view/inc/entete.php";
        ?>

    </header>
    <main>
        <div class="corpsDeText">
            <?php
            include ROOT_PATH . "/view/inc/menu.php";
            ?>

            <div class="corpsComplet">
                <h2>Galerie Photo</h2>

                <?php
                include ROOT_PATH . "/view/inc/menu-burger.php";
                ?>

                <div class="galerie">
                    <div class="galL">
                        <div class="galerie-box">
                            <img src="./img/480px_Budapest_Hungary.jpg">
                            <p>Budapest_Hungary</p>
                        </div>
                        <div class="galerie-box">
                            <img src="./img/480px_Budapest_National_Theatre.jpg">
                            <p>Budapest_National_Theatre</p>
                        </div>
                        <div class="galerie-box">
                            <img src="./img/480px_Budapest_Obuda_town_hall.jpg">
                            <p>Budapest_Obuda_town_hall</p>
                        </div>
                    </div>

                    <div class="galR"> 
                        <div class="galerie-box">
                            <img src="./img/480px_PestiVigadoFotoThalerTamas.jpg">
                            <p>PestiVigadoFotoThalerTamas</p>
                        </div>
                        <div class="galerie-box">
                            <img src="./img/480px_Szabadság_híd.jpg">
                            <p>Szabadság_híd</p>
                        </div>
                        <div class="galerie-box">
                            <img src="./img/480px_Vajdahunyad_vára.jpg">
                            <p>Vajdahunyad</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <a class="retour-haut-page" href="#entete"> ↑ </a>
    </main>
    <script src="./js/script.js"></script>
</body>

</html>
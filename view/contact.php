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

                <h2>Pour nous contacter</h2>

                <img class="imgContact" src="../img/contacts.jpg" alt="contact">


                <p>Pour nous laisser un comentaire ou pour obtenir un renseignement complémentaire, remplissez le
                    formulaire
                    ci-dessous :</p>

                <form action="">

                    <div class="formulaire">
                        <label for="nom">NOM :</label>
                        <input type="text" name="nom" value="Entrez votre nom ...">
                    </div>

                    <div class="formulaire">
                        <label for="prenom">PRENOM :</label>
                        <input type="text" name="prenom" value="Entrez votre prenom ...">
                    </div>

                    <div class="formulaire">
                        <label for="ville">VILLE :</label>
                        <input type="text" name="ville" value="Quelle est votre ville ...">
                    </div>

                    <div class="formulaire">
                        <label for="emai">E-MAIL :</label>
                        <input type="email" name="email" value="Entrez votre email ...">
                    </div>

                    <div class="formulaire">
                        <label for="commentaire">COMMENTAIRES :</label>
                        <textarea name="commentaire" value="Entrez votre commentaire ...">
                        </textarea>    
                    </div>

                    <div class="submit"><input type="submit" name="submit" value="Envoyer votre message"></div>
                    </table>
                </form>
    </main>
    </div>
    </div>
</body>

</html>
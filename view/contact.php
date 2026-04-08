<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous contacter</title>
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
    <main>
    

        <h2>Pour nous contacter</h2>

        <img src="../img/contacts.jpg" alt="contact">

        <p>Pour nous laisser un comentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire
            ci-dessous :</p>

        <form action="">
            <table>
                <tr>
                    <th><label for="nom">NOM :</label></th>
                    <th><input type="text" name="nom" value="Entrez votre nom ..."></th>
                </tr>
                <tr>
                    <th><label for="prenom">PRENOM :</label></th>
                    <th><input type="text" name="prenom" value="Entrez votre prenom ..."></th>
                </tr>
                <tr>
                    <th><label for="ville">VILLE :</label></th>
                    <th><input type="text" name="ville" value="Quelle est votre ville ..."></th>
                </tr>
                <tr>
                    <th><label for="emai">E-MAIL :</label></th>
                    <th><input type="email" name="email" value="Entrez votre email ..."></th>
                </tr>
                <tr>
                    <th><label for="commentaire">COMMENTAIRES :</label></th>
                    <th><input type="textarea" name="commentaire" value="Entrez votre commentaire ..."></th>
                </tr>
                <tr>
                    <th><input type="submit" name="submit" value="Envoyer votre message"></th>
                </tr>
            </table>
        </form>
    </main>
    </div>
</body>

</html>
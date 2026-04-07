<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous contacter</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <header>
        <?php
    include ROOT_PATH. "/inc/entete.php";
    ?>
    
    <h2>Pour nous contacter</h2>

        <?php
    include ROOT_PATH."/inc/menu.php";
    ?>
    </header>
        <img src="../img/contact.jpg" alt="contact">

    <main>
        <p>Pour nous laisser un comentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous :</p>

        <form action="">
            <label for="nom">NOM :</label>
            <input type="text" name="nom" value="nom">
            <label for="prenom">PRENOM :</label>
            <input type="text" name="prenom" value="prenom">
            <label for="ville">VILLE :</label>
            <input type="text" name="ville" value="ville">
            <label for="emai">E-MAIL :</label>
            <input type="email" name="email" value="email">
            <label for="commentaire">COMMENTAIRES :</label>
            <input type="textarea" name="commentaire" value="commentaire">

            <input type="submit" name="submit" value="Envoyer votre message">
        </form>
    </main>
</body>
</html>
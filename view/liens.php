<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liens</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php
    include ROOT_PATH . "/view/inc/entete.php";
    ?>

    <h2>Quelques liens vers nos partenaires.</h2>

    <?php
    include ROOT_PATH . "/view/inc/menu.php";
    ?>

    </header>
        <img src="./img/lien.jpg" alt="Liens">

    <main>
        <table>
            <tr>
                <td><a href="#">Berlin</a></td>
                <td><a href="#">Lisbonne</a></td>
                <td><a href="#">Sofia</a></td>
            </tr>
            <tr>
                <td><a href="#">Vienne</a></td>
                <td><a href="#">Prague</a></td>
                <td><a href="#"></a>Varsovie</td>
            </tr>
            <tr>
                <td><a href="#">Paris</a></td>
                <td><a href="#">Amsterdam</a></td>
                <td><a href="#">Helsinki</a></td>
            </tr>
            <tr>
                <td><a href="#">Madrid</a></td>
                <td><a href="#">Copenhage</a></td>
                <td><a href="#">Stockholm</a></td>
            </tr>
            <tr>
                <td><a href="#">Rome</a></td>
                <td><a href="#">Dublin</a></td>
                <td><a href="#">Oslo</a></td>
            </tr>
            <tr>
                <td><a href="#">Londres</a></td>
                <td><a href="#"></a>Athènes</td>
                <td><a href="#"></a>Budapest</td>
            </tr>

        </table>
    </main>
</body>
</html>
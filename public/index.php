<?php
echo "Ceci est notre CF
path : ".__dir__;

require_once"../config.php";

echo "Racine du projet".ROOT_PATH."";

echo "<pre>";
print_r(ARRAY_VALID_PAGES);
echo "</pre>";

if (!isset($_GET["p"])) {
    include ROOT_PATH."/view/acceuil.php";
} 
<?php

require_once "../config.php";

if (!isset($_GET["pages"])) {
    include ROOT_PATH . "/view/acceuil.php";

} elseif (in_array($_GET['pages'], ARRAY_VALID_PAGES)) {
    include ROOT_PATH . '/view/' . $_GET['pages'] . '.php';

} else {
    include ROOT_PATH . '/view/erreur404.php';
}

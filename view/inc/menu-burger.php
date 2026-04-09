<div class="menu-burger">
    <div class="menu-toggle-container">
        <button class="menu-toggle"><span class="burger">☰</span> menu</button>
    </div>
    <nav class="nav-default">
        
        <ul class="nav-links">
            <li <?php if (!isset($_GET['p'])) echo ("class='page-actuelle'") ?>><a id="accueil" href="./">Accueil</a></li>
            <li <?php if (isset($_GET['p']) && $_GET['p'] == "geographie") echo ("class='page-actuelle'") ?>><a id="geographie" href="./?p=geographie">Géographie</a></li>
            <li <?php if (isset($_GET['p']) && $_GET['p'] == "histoire") echo ("class='page-actuelle'") ?>><a id="histoire" href="./?p=histoire">Histoire</a></li>
            <li <?php if (isset($_GET['p']) && $_GET['p'] == "culture") echo ("class='page-actuelle'") ?>><a id="culture" href="./?p=culture">Culture</a></li>
            <li <?php if (isset($_GET['p']) && $_GET['p'] == "galerie") echo ("class='page-actuelle'") ?>><a id="galerie" href="./?p=galerie">Galerie</a></li>
            <li <?php if (isset($_GET['p']) && $_GET['p'] == "contact") echo ("class='page-actuelle'") ?>><a id="contact" href="./?p=contact">Contact</a></li>
            <li <?php if (isset($_GET['p']) && $_GET['p'] == "liens") echo ("class='page-actuelle'") ?>><a id="liens" href="./?p=liens">Liens</a></li>
        </ul>
    </nav>
</div>
 
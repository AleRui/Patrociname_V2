<?php
if( $_SESSION ) {
    showPretty($_SESSION);
}
?>

<header>
    <div><?php include_once './web/imas/logoPatrociname.php'; ?></div>
    <div><a href="?controller=index&action=index"><h1>Patrociname</h1></a></div>
    <div><h5>V 3.0</h5></div>
    <ul>
        <li><i class="fab fa-facebook"></i></li>
        <li><i class="fab fa-linkedin"></i></li>
    </ul>
</header>

<!-- -->
<?php
if (isset($_SESSION['user'])) {
    ?>
    <div class="contUserTag">
        <div class="btn-show-user" onclick="showContainerUser()">
            <i class="fas fa-user"></i>
        </div>
        <div id="cont-data-user">
            <!--<div>idSearcher:<?= $_SESSION['user']->getIdSearcher() ?></div>-->
            <div><?= $_SESSION['user']->getMailSearcher() ?></div>
            <a href="?controller=searcher&action=logout">Logout</a>
        </div>
    </div>
    <?php
}
?>
<!-- -->

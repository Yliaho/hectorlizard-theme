<nav id="mobile-header" class="hidden-md-up">
    <div class="mobile-header-content">
        <div class="title-container">
            <a href="<?= url() ?>"><?= $site->title()->html() ?></a>
        </div>
        <div class="hamburger-menu">
            <a class="hamburger-icon" href="#" onclick="toggleMobileNav()"></a>
        </div>    
    </div>
</nav>
<?php snippet('_mobile-navigation') ?>

<div>
<nav id="mobile-header" class="<?php e($page->template() == 'projects', 'home-mobile-header hidden-md-up') ?><?php e($page->template() == 'home', 'home-mobile-header hidden-md-up') ?><?php e($page->template() == 'about', 'about-mobile-header hidden-mdHector-up', 'hidden-md-up') ?>">
    <div class="mobile-header-content">
        <div class="title-container">
            <a href="<?= url() ?>"><?= $site->title()->html() ?></a>
        </div>
        <?php snippet('_hamburger-menu') ?>
    </div>
</nav>
<?php snippet('_mobile-navigation') ?>

</div>
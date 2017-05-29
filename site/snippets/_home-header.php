<header id="landing-hero" 
    style="background-image: url('<?= page('home')->images()->sortBy('sort', 'asc')->first()->url() ?>')">
    <div class="landing-bottom-container">
        <?php snippet('_home-navigation') ?>
        <?php snippet('_home-social') ?>
        <?php snippet('_home-scroll-arrow') ?>
    </div>
</header>
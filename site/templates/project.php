<?php 

$projectSubs = $page->children()->visible();

?>

<?php snippet('header') ?>
<?php snippet('_mobile-header')?>

<div class="container-fluid navigation-default-page hidden-sm-down">
  <div class="row">
    <div class="col-sm-4">
      <div class="site-title-default top">
        <a href="<?= url() ?>"><?= $site->title()->html() ?></a>
      </div>
    </div>
    <div class="col-sm-8">
      <?php snippet('_home-navigation') ?>
    </div>
  </div>
</div>

<div id="body-wrapper">
  <br>
  <?php snippet('_pagemark') ?>
  <div class="container-fluid">
    <main id="main" class="main" role="main">
      <section class="project-section">
        <div class="project-desc">
          <div class="row">
            <div class="col-lg-4 project-caption">
              <div class="project-title">
                <h3><?= $page->title()->html() ?></h3>
              </div>
              <div class="project-tags">
                <h4><?= $page->tags()->html() ?></h4>   
              </div>
              <div class="project-year">
                <span><?= $page->year()->html() ?></span>
              </div>
            </div>
            <div class="col-lg-8">
              <?= $page->description()->kirbytext() ?>
              <?php snippet("_share-buttons") ?>
            </div>
          </div>
        </div>
        <div class="project-gallery">
          <div class="row">
            <div class="col">
              <?php foreach($projectSubs as $projectSub): ?>
                <div class="gallery-item">
                  <div class="gallery-image-container">
                      <?php if($image = $projectSub->images()->sortBy('sort', 'asc')->first()): $thumb = $image; ?>
                        <img class="gallery-image img-fluid" src="<?= $thumb->url() ?>" alt="">
                      <?php endif ?>
                  </div>
                  <div class="gallery-text">
                    <div class="row justify-content-end">
                      <div class="col-lg-8 col-md-9">
                        <?php if($projectSub->text()): ?>
                          <?= $projectSub->text()->kirbytext() ?>
                        <?php endif ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>           
            </div>
          </div>      
        </div>
        <div class="bottom-container">
          <div class="row justify-content-end">
            <div class="col-lg-8 col-md-9">
              <?php snippet("_share-buttons")?>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
  <?php snippet('footer') ?>
</div>
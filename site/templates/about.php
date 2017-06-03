<?php
$links = $page->children()->first()->links()->toStructure(); 
?>

<?php snippet('header') ?>
<div class="about-mobile-header">
  <?php snippet('_mobile-header')?>
</div>

<div id="body-wrapper-about">
  <main id="main" class="main about" role="main">
    <div class="about-content">
      <div class="about-right-margin">
        
      </div>
      <div class="about-right-side" style="">
        <?php if($image = $page->images()->sortBy('sort', 'asc')->first()): $aboutImg = $image; ?>
          <div class="about-image-container">
            <div 
              id="largeimg"
              class="about-image visibility-hidden-md-down"
              data-imgurl="<?= $aboutImg->url() ?>"
              style="">
              <?php if($aboutImgSm = $page->image('sm-image.png')): ?>
                <div class="sm-image visibility-hidden-md-up" data-imgurl="<?= $aboutImgSm->url() ?>"></div>
              <?php endif ?>
            </div>
            <script type="text/javascript">
              const bImg = new Image();
              const sImg = new Image();

              const x = document.querySelector('.about-image');
              const y = document.querySelector('.sm-image');

              bImg.onload = function() {
                x.style.backgroundImage = `url('${bImg.src}')`;
                x.classList.add('fetched');
              }
              sImg.onload = function() {
                y.style.backgroundImage = `url('${sImg.src}')`;
                y.classList.add('fetched');                
              }

              bImg.src = x.dataset.imgurl;
              sImg.src = y.dataset.imgurl;
            </script>
          </div>
        <?php endif ?>
      </div>
      <div class="about-main">
        <section class="about-me">
          <div class="about-body">
            <h3><?= $page->title()->html()?></h3>
            <?= $page->intro()->kirbytext() ?>
          </div>
          <div class="about-contact">
            <h3>Contact or follow me!</h3>
            <ul class="contact-list">
              <?php foreach($links as $link): ?>
                <li>
                  <a class="default" href="<?= $link->linkurl()->html() ?>"><?= $link->linkname()->html() ?></a>
                </li>
              <?php endforeach ?>
            </ul>
          </div>
        </section>
      </div>
    </div>
    <div class="about-footer-container">
      <?php snippet('footer') ?>  
    </div>
  </main>
</div>

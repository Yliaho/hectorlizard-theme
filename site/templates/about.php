<?php
$links = $page->children()->first()->links()->toStructure(); 
?>

<?php snippet('header') ?>
<?php snippet('_mobile-header')?>

<div id="body-wrapper-about">
  <main id="main" class="main about" role="main">
    <div class="about-content">
      <div class="about-right-margin">
        
      </div>
      <div class="about-right-side">
        <?php if($image = $page->images()->sortBy('sort', 'asc')->first()): $aboutImg = $image; ?>
          <div class="about-image-container">
            <div 
              id="largeimg"
              class="about-image"
              data-imgurl="<?= $aboutImg->url() ?>"
              style="">
            </div>
            <script type="text/javascript">
              const img = new Image();
              const x = document.querySelector('.about-image');

              img.onload = function() {
                x.style.backgroundImage = `url('${img.src}')`;
                x.classList.add('fetched');
              }

              img.src = x.dataset.imgurl;
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
                  <a class="default" href="<?= $link->linkurl()->url() ?>"><?= $link->linkname()->html() ?></a>
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

<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- favicons -->
  <?php if($site->image('favicon16.png') && $site->image('favicon32.png') && $site->image('favicon96.png')): ?>
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $site->image('favicon16.png')->url() ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $site->image('favicon32.png')->url() ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= $site->image('favicon96.png')->url() ?>">
  <?php endif ?>

  <!-- fb opengraph -->
  <meta property="og:url" content="<?= url::current() ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= $site->title()->html() ?>">
  <?php if($page->template() == 'home' || $page->template() == 'projects'): ?>
    <?php if($homeShareImage = $site->image('hectorlizard-home-share.jpg')): ?>
      <meta property="og:image" content="<?= $homeShareImage->url() ?>">
    <?php endif ?>
  <?php elseif($page->template() == 'project' && $firstImage = $page->images()->sortBy('sort', 'asc')->first()): $projectThumb = $firstImage; ?>
    <meta property="og:image" content="<?= $projectThumb->url() ?>">
  <?php endif ?>
  <meta property="og:description" content="<?= $site->description()->html() ?>">
  <meta property="og:site_name" content="<?= $site->title()->html() ?>">
  <meta property="og:locale" content="en_US">

  <!-- twitter cards -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@<?= $site->twitter() ?>">
  <meta name="twitter:url" content="<?= url::current() ?>">
  <meta name="twitter:title" content="<?php echo $page->title() ?>">
  <meta name="twitter:description" content="<?= $site->description()->html() ?>">
  <?php if($page->template() == 'home' || $page->template() == 'projects'): ?>
    <?php if($homeShareImage = $site->image('hectorlizard-home-share.jpg')): ?>
      <meta name="twitter:image" content="<?= $homeShareImage->url() ?>">
    <?php endif ?>
  <?php elseif($page->template() == 'project' && $firstImage = $page->images()->sortBy('sort', 'asc')->first()): $projectThumb = $firstImage; ?>
    <meta name="twitter:image" content="<?= $projectThumb->url() ?>">
  <?php endif ?>
  
  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <?php if($page->template() == 'project' && $page->description()->isNotEmpty()): ?>
    <meta name="description" content="<?= $page->description()->html() ?>">
  <?php else: ?>
    <meta name="description" content="<?= $site->description()->html() ?>">
  <?php endif ?>
  <!-- bootstrap -->
  <?= css('assets/css/bootstrap/bootstrap.min.css') ?>
  <!-- custom style -->
  <?= css('assets/css/index_min.css') ?>
</head>

<body class="on-top">
	<?php if($page->template() == 'home' || $page->template() == 'projects'): ?>
		<?php snippet('_home-header') ?>
	<?php endif; ?>
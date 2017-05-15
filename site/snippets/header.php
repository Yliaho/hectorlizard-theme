<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <!-- bootstrap -->
  <?= css('assets/css/bootstrap/bootstrap.min.css') ?>
  <!-- custom style -->
  <?= css('assets/css/index.css') ?>

</head>

<body class="on-top">
	<?php if($page->template() == 'home' || $page->template() == 'projects'): ?>
		<?php snippet('_home-header') ?>
	<?php endif; ?>
<?php

$projects = page('projects')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<ul class="showcase">

  <?php foreach($projects as $project): ?>

    <li class="showcase-item column">
        <a href="<?= $project->url() ?>" class="showcase-link">
          <div class="showcase-thumb">
            <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image; ?>
              <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" data-hex="<?= $project->hex()->html() ?>"/>
            <?php endif ?>
            <?php if($overlay = $project->image('overlay.png')): ?>
              <img class="thumb-overlay" src="<?= $overlay->url() ?>">
            <?php endif ?>
          </div>
          <div class="showcase-caption">
            <h3 class="showcase-title"><?= $project->title()->html() ?></h3>
            <h4 class="showcase-tags"><?= $project->tags()->html() ?></h4>
          </div>
          <div class="project-description">
            <p><?= $project->description()->html() ?></p>
          </div>
        </a>
    </li>

  <?php endforeach ?>

</ul>
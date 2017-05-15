<div id="nav" class="home-navigation <?php e($page->template('about'), ' hidden-mdHector-down') ?>">
    <ul>
        <?php foreach($pages->visible() as $item): ?>
            <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
            <?php if($item->template() == 'projects'): ?>
                <a href="<?= $item->url() ?>/#main" onclick="location.reload()"><?= $item->title()->html() ?></a>
            <?php elseif($item->template() !== 'projects'): ?>
                <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
            <?php endif ?>
            </li>
            <?php if($item->hasTemplate('projects')): ?>
            <?php endif ?>
        <?php endforeach ?>
        <li>
            <a href="mailto:<?= $site->email() ?>">Contact</a>
        </li>
    </ul>
</div>
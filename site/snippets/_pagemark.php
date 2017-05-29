<div class="pagemark-scroll hidden-sm-down">
    <?php if($page->template() == 'home' || $page->template() == 'projects'): ?>
        <div class="pagemark-title pagemark-home">
            <a href="<?= url() ?>"><?= $site->title()->html() ?></a>
        </div>
    <?php elseif($page->template() == 'project'): ?>
        <div class="pagemark-title pagemark-default top">
            <a href="<?= url() ?>"><?= $site->title()->html() ?></a>
        </div>
	<?php endif; ?>
</div>
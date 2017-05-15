<div class="share-container">
    <ul>
        <li class="share-list">
            <a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @your_account')?>" class="tweet default"target="blank" title="Tweet this">Tweet</a>
        </li>
        <li class="share-list">
            <a href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" class="facebook default" target="blank" title="Share on Facebook">Share on Facebook</a>
        </li>
        <li class="share-list">
            <a href="mailto:?body=<?= $page->url() ?>" class="email default">E-Mail</a>
        </li>
    </ul>
</div>
<article>
    <header>
        <h2><?=$post['title']?></h2>
        <p>By: <?=$post['name']?></p>
    </header>
    <p><?=$post['content']?></p>
</article>
<?php

if (empty($commentTab)): ?>
    Pas de commentaires


<?php else:?>



    <?php foreach ($commentTab as $comment) : ?>

        <p>Commenté par <?=$comment['Author_pseudo']?></p>
        <p><?=$comment['text']?></p>

    <?php endforeach ?>
<?php endif?>

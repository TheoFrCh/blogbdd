<?php
if (empty($postsTab)): ?>

  Aucune données à afficher!

<?php else:?>
    <?php foreach ($postsTab as $post) : ?>
       <article>
           <?=$post['name']?> ||
           <?=$post['title']?> ||
           <?=$post['content']?>
       </article>

    <?php endforeach ?>
<?php endif?>


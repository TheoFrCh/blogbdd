<?php
if (empty($postsTab)): ?>

  Aucune données à afficher!

<?php else:?>
    <?php foreach ($postsTab as $post) : ?>
       <article>
           <header>
               <h2><?=$post['title']?></h2>
               <p>By: <?=$post['name']?></p>
           </header>
           <p><?=$post['content']?></p>
       </article>

    <?php endforeach ?>
<?php endif?>


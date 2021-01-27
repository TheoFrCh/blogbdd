<?php
function lastBlogPosts($db)
{
    $prestab = $db->prepare('SELECT Author.name, Posts.title, Posts.content  
FROM Posts
INNER JOIN Author ON Author.idAuthor = Posts.Author_idAuthor
ORDER BY Posts.id DESC
LIMIT 10');
    $prestab->execute();
    $result = $prestab->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
}
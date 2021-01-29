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


function blogPostById($db, $id)
{
    $query = "SELECT title, content, Author_idAuthor,Author.name 
FROM Posts
INNER JOIN Author ON Author.idAuthor=Posts.Author_idAuthor
WHERE Posts.id=$id";
    //var_dump($query);
   $resultdb=$db->query($query);
   //var_dump($resultdb);
    $result = $resultdb->fetch(PDO::FETCH_ASSOC);
//    var_dump($result);
    return $result;
}


function commentByBlogPost($comment,$id)
{
    $commentTab = $comment->prepare ('SELECT text,Comment.Author_pseudo
FROM Comment 
INNER JOIN Posts ON Post_id =  Posts.id
WHERE Posts.id = :id
ORDER BY idComment
ASC');
    $commentTab->bindParam(':id', $id, PDO::PARAM_INT);
//var_dump($commentTab);
    $commentTab->execute();
  //  var_dump($commentTab);
    $result = $commentTab->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
}
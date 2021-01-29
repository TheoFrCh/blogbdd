<?php
include 'app/persistences/blogPostData.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

$post = blogPostById($mabdd,$id);
//var_dump($post);
$commentTab = commentByBlogPost($mabdd,$id);

include 'ressources/views/layouts/blogPost.tpl.php';
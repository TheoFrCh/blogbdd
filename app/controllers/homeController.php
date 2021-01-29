<?php
include 'app/persistences/blogPostData.php';

$postsTab=lastBlogPosts($mabdd);

include 'ressources/views/home.tpl.php';
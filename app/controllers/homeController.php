<?php
include 'app/persistences/blogPostData.php';

$postsTab=lastBlogPosts($dbh);

include 'ressources/views/home.tpl.php';
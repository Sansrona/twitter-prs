<?php 
include_once "includes/functions.php";
if(!isset($_SESSION["user"]['id'])&&empty($_SESSION["user"]['id'])) redirect();

$posts = get_liked_posts($_SESSION["user"]['id']);
$title = "Понравившиеся посты";
$error = get_error_message();



include_once "includes/header.php";
include_once "includes/posts.php";  
include_once "includes/footer.php";
?> 

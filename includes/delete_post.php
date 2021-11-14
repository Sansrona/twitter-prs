<?php
include_once 'functions.php';

if (!isset($_SESSION['user']) && empty($_SESSION['user'])) redirect();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    if (!delete_post($_GET['id'])) {
        $_SESSION['error'] = 'Во время удаления поста что-то пошло не так';
    }
}




redirect('user_posts.php');

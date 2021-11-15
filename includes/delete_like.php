<?php
include_once 'functions.php';

if (!isset($_SESSION['user']) && empty($_SESSION['user'])) redirect();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    if (!delete_like($_GET['id'])) {
        $_SESSION['error'] = 'Во время удаления лайка что-то пошло не так';
    }
}




redirect();

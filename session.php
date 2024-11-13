<?php 

session_start();


if(isset($_COOKIE[session_name()])) {
    setcookie(session_name(), $_COOKIE[session_name()]);
}

if(isset($_POST['logout'])) {
    session_unset();

    session_destroy();


    header("location:" . $_SERVER['PHP_SELF']);

    exit;
}

if(!isset($_SESSION['user'])) {
    $_SESSION['user'] = [
        'image' => 'images/salad.png',
    ];
}


if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['logout'])) {
    if (isset($_POST['image'])) {
        $_SESSION['user']['image'] = $_POST['image'];
    }
}



?>


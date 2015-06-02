<?php function redirect(){ header('location:games.php'); }
session_start();
    $username = isset($_GET['pseudo']) ? $_GET['pseudo'] : "";
    $password = isset($_GET['pass']) ? $_GET['pass'] : "";
    $nom = isset($_GET['nom']) ? $_GET['nom'] : "";
    $f_name = isset($_GET['f_name']) ? $_GET['f_name'] : "";
    $email = isset($_GET['email']) ? $_GET['email'] : "";

    $_SESSION['user-info'][$username] = $password;
    redirect();

//array_merge($user_array,$client_array);
//
//
//var_dump($user_array);
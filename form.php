<?php
session_start();
include 'twig_connect.php';

$credentials = array('login' => 'foo', 'password' => 'bar');
$notLogged = true;


if (isset($_POST['login']) && isset($_POST['password'])):
    if ($credentials['login'] == $_POST['login'] &&
        $credentials['password'] == $_POST['password']):

//        if (!is_array($_SESSION['dates'])){
//            $_SESSION['dates'] = array();
//        }
        $_SESSION['dates'][] = date("H:i:s");

        echo $twig->render('login_true.html',
             array('name'=>$credentials, 'times'=>$_SESSION['dates']));

    elseif($credentials['login'] !== $_POST['login'] ||
           $credentials['password'] !== $_POST['password']):
        echo $twig->render('form.html', array());
        echo "Login or password wrong!";
    endif;
    $notLogged = false;
elseif(!isset($_POST['login']) || !isset($_POST['password'])):
    echo $twig->render('form.html', array());
    echo "Enter Login or password!";
endif;

//$sessio = isset($_SESSION['logged']) && $_SESSION['logged'];

//if (isset($_GET['logout'])):
//	session_destroy();
//endif;




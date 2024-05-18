<?php
session_start();
require_once ("{$ROOT}{$DS}model{$DS}ModelUsers.php");
if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else $action="connect";

switch ($action){
    case "connect":
        session_start();

        if(isset($_REQUEST["username"]) && !(empty($_REQUEST["username"])))
        {
            $login=$_REQUEST["username"];
        }
        else
        {
            die("ajouter votre login !!!");
        }

        if(isset($_REQUEST["password"]) && !(empty($_REQUEST["password"])))
        {
            $pass=$_REQUEST["password"];
        }
        else
        {
            die("donner votre mot de passe  !!!");
        }

        $nb=ModelUsers::getConnect($login,$pass);
        if($nb==0)
        {
            $_SESSION['test']="Mot de passe ou login incorrect !!!!!";
            header('Location:index.php?controller=login');
        }else
        {
            $ligne=ModelUsers::getAllUser($login,$pass);
            if($ligne->role =='Admin')
            {
                $_SESSION['role']='Admin';
                $_SESSION['nom']=$ligne->userName;
                header('Location:index.php?controller=home');
                break;

            }
            else
            {
                $_SESSION['role']='Hotelier';
                $_SESSION['nom']=$ligne->userName;
                header('Location:index.php?controller=home');
                break;

            }
        }
        break;

    case "deconnecter":

        unset($_SESSION['role']);
        session_unset();
        session_destroy();


        header('Location:index.php?controller=login');
        break;
}
?>
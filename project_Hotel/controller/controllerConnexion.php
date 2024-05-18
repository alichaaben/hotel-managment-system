<?php
session_start();
require_once ("{$ROOT}{$DS}model{$DS}ModelClients.php");
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

        $nb=ModelClients::getConnect($login,$pass);
        if($nb==0)
        {
            $_SESSION['test']="Mot de passe ou login incorrect !!!!!";
            header('Location:index.php?controller=login');
        }else
        {
            $ligne=ModelClients::getAllUser($login,$pass);

                $_SESSION['nom']=$ligne->firstname;
                header('Location:index.php?controller=rooms&action=readAll');
                break;



        }
        break;

    case "deconnecter":

        unset($_SESSION['nom']);
        session_unset();
        session_destroy();


        header('Location:index.php?controller=login');
        break;




}
?>
<?php

$ROOT = __DIR__;

$DS = DIRECTORY_SEPARATOR;

$controleur_default = "homePage" ;

if(!isset($_REQUEST['controller']))
    //$controller récupère $controller_default;
    $controller=$controleur_default;
else
    // recupère l'action passée dans l'URL
    $controller = $_REQUEST['controller'];

switch ($controller) {

    case "login" :
        require ("{$ROOT}{$DS}controller{$DS}controllerLogin.php");
        break;

    case "connexion" :
        require ("{$ROOT}{$DS}controller{$DS}controllerConnexion.php");
        break;

    case "homePage" :
        require ("{$ROOT}{$DS}controller{$DS}controllerHomePage.php");

        break;

    case "bookings" :
        require ("{$ROOT}{$DS}controller{$DS}controllerBookings.php");
        break;

    case "rooms" :
        require ("{$ROOT}{$DS}controller{$DS}controllerRooms.php");
        break;

    case "clients" :
        require ("{$ROOT}{$DS}controller{$DS}controllerClients.php");
        break;




    /*case "home" :
        require ("{$ROOT}{$DS}controller{$DS}controllerHome.php");

        break;*/


    case "default" :
        require ("{$ROOT}{$DS}controller{$DS}controllerHome.php");
        break;


}
?>
<?php

$ROOT = __DIR__;

$DS = DIRECTORY_SEPARATOR;

//$controleur_default = "login" ;
$controleur_default = "login" ;

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

    case "home" :
        require ("{$ROOT}{$DS}controller{$DS}controllerHome.php");
        break;

    case "payments" :
        require ("{$ROOT}{$DS}controller{$DS}controllerPayments.php");
        break;

    case "gallerys" :
        require ("{$ROOT}{$DS}controller{$DS}controllerGallerys.php");
        break;

   case "bookings" :
        require ("{$ROOT}{$DS}controller{$DS}controllerBookings.php");
        break;

    case "clients" :
        require ("{$ROOT}{$DS}controller{$DS}controllerClients.php");
        break;

    case "users" :
        session_start();
        require ("{$ROOT}{$DS}controller{$DS}controllerUsers.php");
        break;

    case "offres" :
        require ("{$ROOT}{$DS}controller{$DS}controllerOffres.php");
        break;

    case "rooms" :
        require ("{$ROOT}{$DS}controller{$DS}controllerRooms.php");
        break;

    case "facilities" :
         require ("{$ROOT}{$DS}controller{$DS}controllerFacilities.php");
         break;

    case "profil" :
        require ("{$ROOT}{$DS}controller{$DS}controllerProfil.php");
        break;

    case "default" :
        require ("{$ROOT}{$DS}controller{$DS}controllerHome.php");
        break;


}
?>
<?php
require_once ("{$ROOT}{$DS}model{$DS}ModelBookings.php");
require_once ("{$ROOT}{$DS}model{$DS}ModelRooms.php");
require_once ("{$ROOT}{$DS}model{$DS}ModelOffres.php");
require_once ("{$ROOT}{$DS}model{$DS}ModelClients.php");
if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else $action="affichAll";

switch ($action){
    case "affichAll":
        if (isset($_REQUEST['recherche'])){
            $TAB=$_REQUEST['recherche'];
            $room=$TAB[0];
            $FName=$TAB[1];
            $chekIn=$TAB[2];
            $chekOut=$TAB[3];
            $pagetitle = "Dashboard";
            $view = "affichAll";

            $nbBookings=ModelBookings::getAllNbBookings();
            $nbClients=ModelClients::NbClients();
            $nbRooms=ModelRooms::getAllNbRooms();
            $nbOffres=ModelOffres::getNbOffres();



            $tab_R = ModelBookings::getRoomBooking();
            $tab_C = ModelBookings::RecheBookings($room,$FName,$chekIn,$chekOut);
            $tab_offres = ModelOffres::getAll();
            $tab_RoomOffres = ModelOffres::getRoomTab();
            require ("{$ROOT}{$DS}view{$DS}view.php");
            break;
        }else{
            $pagetitle = "Dashboard";
            $view = "affichAll";


            $nbBookings=ModelBookings::getAllNbBookings();
            $nbClients=ModelClients::NbClients();
            $nbRooms=ModelRooms::getAllNbRooms();
            $nbOffres=ModelOffres::getNbOffres();

            $tab_R = ModelBookings::getRoomBooking();
            $tab_C = ModelBookings::getAll();
            $tab_offres = ModelOffres::getAll();
            $tab_RoomOffres = ModelOffres::getRoomTab();
            require ("{$ROOT}{$DS}view{$DS}view.php");
            break;
        }

}

?>

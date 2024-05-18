<?php
//@ini_set('display_errors', 'on');
require_once ("{$ROOT}{$DS}model{$DS}ModelRooms.php");

if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else $action="readAll";

switch ($action){
    case "readAll":
        if (isset($_REQUEST['recherche'])){
            $TAB=$_REQUEST['recherche'];
            $chekIn=$TAB[0];
            $chekOut=$TAB[1];
            $nbAdult=$TAB[2];
            $nbChild=$TAB[3];
            $pagetitle = "Rooms";
            $view = "readAll";

            $tab_C = ModelRooms::RecheRooms($nbAdult,$nbChild);

            require ("{$ROOT}{$DS}view{$DS}view.php");
            break;
        }else{
            $pagetitle = "Rooms";
            $view = "readAll";
            $tab_C = ModelRooms::getAll();
            require ("{$ROOT}{$DS}view{$DS}view.php");
            break;
        }

    case "update":
        if(isset($_REQUEST['roomId'])){
            $idRoom = $_REQUEST['roomId'];
            $idRooms=ModelRooms::select($idRoom);
            if($idRooms!=null){
                $pagetitle = "Details Room";
                $view = "update";
                require ("{$ROOT}{$DS}view{$DS}view.php");
            }

        }
        break;









}

?>

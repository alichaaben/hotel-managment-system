<?php
//@ini_set('display_errors', 'on');
require_once ("{$ROOT}{$DS}model{$DS}ModelRooms.php");
if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else $action="readAll";

switch ($action){
    case "readAll":
        $pagetitle = "Gallerys";
        $view = "readAll";
        $tab_R = ModelRooms::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;



}

?>

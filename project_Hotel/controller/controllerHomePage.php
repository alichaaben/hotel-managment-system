<?php
if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else $action="homePage";

switch ($action){
    case "homePage":

            $pagetitle = "Home";
            $view = "homePage";

            /*$nbClients=ModelClients::getAllNb();*/

        require ("{$ROOT}{$DS}view{$DS}homePage.php");
            break;


}

?>

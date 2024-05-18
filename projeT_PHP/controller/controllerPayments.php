<?php
//@ini_set('display_errors', 'on');
require_once ("{$ROOT}{$DS}model{$DS}ModelPayments.php");
if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else $action="readAll";

switch ($action){

    case "readAll":
        $pagetitle = "payments";
        $view = "readAll";
        $tab_P = ModelPayments::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
}

?>

<?php
require_once ("{$ROOT}{$DS}model{$DS}ModelUsers.php");
if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else $action="login";

switch ($action){
    case "login":
        $pagetitle = "connexion";
        $view = "login";
        require ("{$ROOT}{$DS}view{$DS}login.php");
        break;
}
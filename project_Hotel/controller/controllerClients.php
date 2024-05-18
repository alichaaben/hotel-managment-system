<?php
@ini_set('display_errors', 'on');
require_once ("{$ROOT}{$DS}model{$DS}ModelClients.php");
if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else $action="created";

switch ($action){

    case "created":
        if (isset($_REQUEST['first_name']) && isset($_REQUEST['last_name']) && isset($_REQUEST['birth_date']) &&
            isset($_REQUEST['email']) && isset($_REQUEST['phone']) && isset($_REQUEST['country']) &&
            isset($_REQUEST['zip_code'])&& isset($_REQUEST['city'])&& isset($_REQUEST['new_password'])) {

            $id=null;
            $fName = $_REQUEST['first_name'];
            $LName = $_REQUEST['last_name'];
            $date = $_REQUEST['birth_date'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $country = $_REQUEST['country'];
            $zipCod = $_REQUEST['zip_code'];
            $city = $_REQUEST['city'];
            $pass = $_REQUEST['new_password'];


            $recherche = ModelClients::select($id);
            if ($recherche == null) {
                $u = new ModelClients($id, $fName, $LName,$date, $email, $phone,$country, $zipCod, $city,$pass);
                $tab = array(
                    "id" => $id,
                    "firstname" => $fName,
                    "lastname" => $LName,
                    "date" => $date,
                    "email" => $email,
                    "phone" => $phone,
                    "country" => $country,
                    "zipCode" => $zipCod,
                    "city" => $city,
                    "password" => $pass
                );

                $u->insert($tab);
                header('Location:index.php?controller=login');
            }
        }
        break;








}

?>

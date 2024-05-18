<?php
@ini_set('display_errors', 'on');
require_once ("{$ROOT}{$DS}model{$DS}ModelBookings.php");
if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else $action="created";

switch ($action){

    case "created":
        if (isset($_REQUEST['firstName']) && isset($_REQUEST['lastName']) && isset($_REQUEST['email']) &&
            isset($_REQUEST['checkIN']) && isset($_REQUEST['checkout']) && isset($_REQUEST['phone']) &&
            isset($_REQUEST['TotalPrice'])) {

            $code=null;
            $room = $_REQUEST['roomId'];
            $checkIn = $_REQUEST['checkIN'];
            $checkOut = $_REQUEST['checkout'];
            $firstName = $_REQUEST['firstName'];
            $lastName = $_REQUEST['lastName'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $totalPrice = $_REQUEST['TotalPrice'];
            $status = null;

            $recherche = ModelBookings::select($code);
            if ($recherche == null) {
                $u = new ModelBookings($code, $room, $checkIn,$checkOut, $firstName, $lastName,$email, $phone, $totalPrice,$status);
                $tab = array(
                    "code" => $code,
                    "roomId" => $room,
                    "checkIn" => $checkIn,
                    "checkOut" => $checkOut,
                    "firstName" => $firstName,
                    "lastName" => $lastName,
                    "email" => $email,
                    "phone" => $phone,
                    "totalPrice" => $totalPrice
                );
                $u->insert($tab);
                header('Location:index.php?controller=rooms&action=readAll');
            }
        }
        break;






    case "updated":
        if (isset($_REQUEST['firstName']) && isset($_REQUEST['lastName']) && isset($_REQUEST['email']) &&
            isset($_REQUEST['checkIN']) && isset($_REQUEST['checkout']) && isset($_REQUEST['phone']) &&
            isset($_REQUEST['TotalPrice'])) {

            $x = $_REQUEST['roomId'];
            $tab = array(
                "code" => null,
                "roomId" => $x,
                "checkIn" => $_REQUEST['checkIN'],
                "checkOut" => $_REQUEST['checkout'],
                "firstName" => $_REQUEST['firstName'],
                "lastName" => $_REQUEST['lastName'],
                "email" => $_REQUEST['email'],
                "phone" => $_REQUEST['phone'],
                "totalPrice" => $_REQUEST['TotalPrice']
            );

            $o = ModelBookings::select($x);
            if($o!=null){
                $u=ModelBookings::update($tab,$x);

                header('Location:index.php?controller=rooms&action=readAll');
            }
        }
        break;







}

?>

<?php
//@ini_set('display_errors', 'on');
require_once ("{$ROOT}{$DS}model{$DS}ModelBookings.php");
if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else $action="readAll";

switch ($action){
    case "readAll":
        $pagetitle = "Bookings";
        $view = "readAll";
        $tab_R = ModelBookings::getRoomBooking();
        $tab_C = ModelBookings::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

    case "delete":
        if(isset($_REQUEST['code'])){
            $code = $_REQUEST['code'];
            $codes = ModelBookings::select($code);
            $codes->delete($code);
            header('Location:index.php?controller=bookings&action=readAll');
        }
        break;


    case "create":
        $pagetitle = "Add Booking";
        $view = "create";
        $tab_R = ModelBookings::getAllRoom();
        require("{$ROOT}{$DS}view{$DS}view.php");
        break;

    case "created":
        if (isset($_REQUEST['NameRoom']) && isset($_REQUEST['Check-in']) && isset($_REQUEST['Check-out']) && isset($_REQUEST['FName'])
            && isset($_REQUEST['LName']) && isset($_REQUEST['email']) && isset($_REQUEST['Phone']) && isset($_REQUEST['Price'])) {

             $code=null;
             $room = $_REQUEST['NameRoom'];
             $checkIn = $_REQUEST['Check-in'];
             $checkOut = $_REQUEST['Check-out'];
             $firstName = $_REQUEST['FName'];
             $lastName = $_REQUEST['LName'];
             $email = $_REQUEST['email'];
             $phone = $_REQUEST['Phone'];
             $totalPrice = $_REQUEST['Price'];
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
                header('Location:index.php?controller=bookings&action=readAll');
            }
        }
        break;


    case "update":
        if(isset($_REQUEST['code'])){
            $code = $_REQUEST['code'];
            $tab_R = ModelBookings::getAllRoom();
            $codes=ModelBookings::select($code);
            if($codes!=null){
                $pagetitle = "Edit Bookings";
                $view = "update";
                require ("{$ROOT}{$DS}view{$DS}view.php");
            }
        }
        break;

    case "updated":
        if (isset($_REQUEST['NameRoom']) && isset($_REQUEST['Check-in']) && isset($_REQUEST['Check-out']) && isset($_REQUEST['FName'])
            && isset($_REQUEST['LName']) && isset($_REQUEST['email']) && isset($_REQUEST['Phone']) && isset($_REQUEST['Price'])) {

            $x = $_REQUEST['code'];


            $tab = array(
                "code" => $_REQUEST['code'],
                "roomId" => $_REQUEST['NameRoom'],
                "checkIn" => $_REQUEST['Check-in'],
                "checkOut" => $_REQUEST['Check-out'],
                "firstName" => $_REQUEST['FName'],
                "lastName" => $_REQUEST['LName'],
                "email" => $_REQUEST['email'],
                "phone" => $_REQUEST['Phone'],
                "totalPrice" => $_REQUEST['Price']
            );
            $o = ModelBookings::select($x);
            if($o!=null){
                $u=ModelBookings::update($tab,$x);

                header('Location:index.php?controller=bookings&action=readAll');
            }
        }
        break;

}

?>

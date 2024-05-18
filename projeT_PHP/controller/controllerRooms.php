<?php
//@ini_set('display_errors', 'on');
require_once ("{$ROOT}{$DS}model{$DS}ModelRooms.php");
if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else $action="readAll";

switch ($action){
    case "readAll":
        $pagetitle = "Rooms";
        $view = "readAll";
        $tab_C = ModelRooms::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

    /*case "delete":
        if(isset($_REQUEST['roomId'])){
            $roomId = $_REQUEST['roomId'];
            $room = ModelRooms::select($roomId);

            if($roomId != null){
                // Supprimer l'image du dossier si elle existe
                $imagePath = $room->getImage();
                if(!empty($imagePath) && file_exists($imagePath)) {
                    unlink($imagePath);
                }

                $room->delete($roomId);
            header('Location:index.php?controller=users&action=readAll');
            }
        }
        break;*/

    case "create":
        $pagetitle = "Add Room";
        $view = "create";
        require("{$ROOT}{$DS}view{$DS}view.php");
        break;

    case "created":
        if (isset($_REQUEST['NameRoom']) && isset($_REQUEST['desc']) && isset($_REQUEST['MaxP']) &&
            isset($_REQUEST['MaxChelid']) && isset($_REQUEST['NbRooms']) && isset($_REQUEST['price']) &&
            isset($_REQUEST['area'])) {

            $roomId = NULL;
            $nameRoom = $_REQUEST['NameRoom'];
            $area = $_REQUEST['area'];
            $description = $_REQUEST['desc'];
            $maxPersons = $_REQUEST['MaxP'];
            $maxChildren = $_REQUEST['MaxChelid'];
            $priceNight = $_REQUEST['price'];
            $status = "Active";
            $numberRooms = $_REQUEST['NbRooms'];
            $roomFacilities = NULL;

            $uploadedImages = [];
            if (isset($_FILES['images'])) {
                $allowedExtensions = ['png', 'jpg', 'jpeg', 'gif'];
                $targetDir = './assets/imgUpload/';

                foreach ($_FILES['images']['name'] as $key => $name) {
                    if ($_FILES['images']['error'][$key] === 0) {
                        $extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));

                        if (in_array($extension, $allowedExtensions)) {
                            $filename = uniqid('', true) . '.' . $extension;
                            $targetFile = $targetDir . $filename;

                            if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $targetFile)) {
                                $uploadedImages[] = $targetFile;
                            } else {
                                $uploadedImages[]=null;
                            }
                        }
                    }
                }
            }

            $recherche = ModelRooms::select($roomId);
            if ($recherche == null) {
                $images = implode(',', $uploadedImages);
                $u = new ModelRooms($roomId, $images, $nameRoom, $area, $description, $maxPersons, $maxChildren, $priceNight, $status, $numberRooms, $roomFacilities);
                $tab = array(
                    "roomId" => $roomId,
                    "images" => $images,
                    "nameRoom" => $nameRoom,
                    "area" => $area,
                    "description" => $description,
                    "maxPersons" => $maxPersons,
                    "maxChildren" => $maxChildren,
                    "priceNight" => $priceNight,
                    "status" => $status,
                    "numberRooms" => $numberRooms,
                    "roomFacilities" => $roomFacilities
                );
                $u->insert($tab);
                header('Location:index.php?controller=rooms&action=readAll');
            }
        }
        break;


    case "update":
        if(isset($_REQUEST['roomId'])){
            $roomId = $_REQUEST['roomId'];
            $rooms=ModelRooms::select($roomId);
            if($rooms!=null){
                $pagetitle = "Edit room";
                $view = "update";
                require ("{$ROOT}{$DS}view{$DS}view.php");
            }

        }
        break;

    case "updated":
        if (isset($_REQUEST['NameRoom']) && isset($_REQUEST['desc']) && isset($_REQUEST['MaxP']) &&
            isset($_REQUEST['MaxChelid']) && isset($_REQUEST['NbRooms']) && isset($_REQUEST['price']) &&
            isset($_REQUEST['area'])) {

            $x = $_REQUEST['roomId'];

            $uploadedImages = [];
            if (isset($_FILES['images'])) {
                $allowedExtensions = ['png', 'jpg', 'jpeg', 'gif'];
                $targetDir = './assets/imgUpload/';



                foreach ($_FILES['images']['name'] as $key => $name) {
                    if ($_FILES['images']['error'][$key] === 0) {
                        $extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));

                        if (in_array($extension, $allowedExtensions)) {
                            $filename = uniqid('', true) . '.' . $extension;
                            $targetFile = $targetDir . $filename;

                            if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $targetFile)) {
                                $uploadedImages[] = $targetFile;
                            } else {
                                $uploadedImages[]=null;
                            }
                        }
                    }
                }
            }
            $images = implode(',', $uploadedImages);

            $tab = array(
                "roomId"=>$_REQUEST['roomId'],
                "images" =>$images,
                "nameRoom" =>$_REQUEST["NameRoom"],
                "area" =>$_REQUEST["area"],
                "description" =>$_REQUEST["desc"],
                "maxPersons" =>$_REQUEST["MaxP"],
                "maxChildren" =>$_REQUEST["MaxChelid"],
                "priceNight" =>$_REQUEST['price'],
                "status" =>"Active",
                "numberRooms" =>$_REQUEST["NbRooms"],
                "roomFacilities" =>null
            );
            $o = ModelRooms::select($x);
            if($o!=null){
                $u=ModelRooms::update($tab,$x);

                header('Location:index.php?controller=rooms&action=readAll');
            }
        }
        break;

}

?>

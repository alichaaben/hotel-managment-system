<?php
//@ini_set('display_errors', 'on');
require_once ("{$ROOT}{$DS}model{$DS}ModelUsers.php");
if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else $action="update";

switch ($action){

    case "update":


        if(isset($_REQUEST['nom'])){
            $userName = $_REQUEST['nom'];
            $usersId=ModelUsers::getUsersId($userName);
            $id=$usersId->idUser;
            $userId = ModelUsers::select($id);

                if ($userId != null) {
                    $pagetitle = "Edit Profil";
                    $view = "update";
                    require("{$ROOT}{$DS}view{$DS}view.php");
                }


        }
        break;

    case "updated":
        if(isset($_REQUEST['idUser']) && isset($_REQUEST['UserName']) && isset($_REQUEST['email']) && isset($_REQUEST['pass'])&&
            isset($_REQUEST['creationDate']) && isset($_REQUEST['expirationDate'])
            && isset($_REQUEST['role']) && isset($_REQUEST['status'])){

            $x = $_REQUEST['idUser'];

            $image = null;
            if ($_FILES['image']['error'] === 0) {
                $allowedExtensions = ['png', 'jpg', 'jpeg', 'gif'];
                $extension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
                if (in_array($extension, $allowedExtensions)) {
                    $targetDir = './assets/imgUpload/';
                    $filename = uniqid('', true) . '.' . $extension;
                    $targetFile = $targetDir . $filename;

                    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                        $image = $targetFile;
                    }
                }
            }

            $tab = array(
                "idUser"=>$_REQUEST['idUser'],
                "userName" =>$_REQUEST["UserName"],
                "image" =>$image,
                "emailAddress" =>$_REQUEST["email"],
                "creationDate" =>$_REQUEST["creationDate"],
                "role" =>$_REQUEST["role"],
                "accountStatus" =>$_REQUEST["status"],
                "password" =>$_REQUEST['pass'],
                "expirationDate" =>$_REQUEST["expirationDate"]
            );
            $o = ModelUsers::select($x);
            if($o!=null){
                $u=ModelUsers::update($tab,$x);

                header('Location:index.php?controller=users&action=readAll');
            }
        }
        break;


}

?>

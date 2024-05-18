<?php
//@ini_set('display_errors', 'on');
require_once ("{$ROOT}{$DS}model{$DS}ModelUsers.php");
if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else $action="readAll";

switch ($action){
    case "readAll":
            $pagetitle = "Users";
            $view = "readAll";
            $tab_C = ModelUsers::getAll();
            require ("{$ROOT}{$DS}view{$DS}view.php");
            break;

    case "delete":
        if(isset($_REQUEST['idUser'])){
            $idUser = $_REQUEST['idUser'];
            $user = ModelUsers::select($idUser);
            if($user != null){
                // Supprimer l'image du dossier si elle existe
                $imagePath = $user->getImage();
                if(!empty($imagePath) && file_exists($imagePath)) {
                    unlink($imagePath);
                }

                $user->delete($idUser);
                header('Location:index.php?controller=users&action=readAll');
            }
        }
        break;



    case "create":
        $pagetitle = "Add User";
        $view = "create";
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

    case "created":

        if(isset($_REQUEST['UserName']) && isset($_REQUEST['email']) && isset($_REQUEST['pass'])&&
            isset($_REQUEST['creationDate']) && isset($_REQUEST['expirationDate']) && isset($_REQUEST['role']) && isset($_REQUEST['status'])){
            $idUser=NULL;
            $image=null;
            $UserName=$_REQUEST['UserName'];
            $email=$_REQUEST['email'];
            $pass = $_REQUEST['pass'];
            $creationDate=$_REQUEST['creationDate'];
            $expirationDate=$_REQUEST['expirationDate'];
            $role=$_REQUEST['role'];
            $status=$_REQUEST['status'];


            if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
                $allowedExtensions = ['png', 'jpg', 'jpeg', 'gif'];
                $extension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
                $image = $extension;
                if (in_array($extension, $allowedExtensions)) {
                    $targetDir = './assets/imgUpload/';
                    $filename = uniqid('', true) . '.' . $extension;
                    $targetFile = $targetDir . $filename;

                    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                        $image = $targetFile;
                    } else {
                        $image = null;
                        exit;
                    }
                }
            }



            $recherche = ModelUsers::select($idUser);
            if($recherche==null){
                $u = new ModelUsers($idUser,$image,$UserName,$email,$creationDate,$role,$status,$pass,$expirationDate);
                $tab = array(
                    "idUser" =>$idUser,
                    "image" =>$image,
                    "userName" =>$UserName,
                    "emailAddress" =>$email,
                    "creationDate" =>$creationDate,
                    "role" =>$role,
                    "accountStatus" =>$status,
                    "password" =>$pass,
                    "expirationDate" =>$expirationDate
                );
                $u->insert($tab);
                header('Location:index.php?controller=users&action=readAll');
            }
        }
        break;



        case "update":
            if(isset($_REQUEST['idUser'])){
                $idUser = $_REQUEST['idUser'];
                $users=ModelUsers::select($idUser);
                if($users!=null){
                    $pagetitle = "Edit User";
                    $view = "update";
                    require ("{$ROOT}{$DS}view{$DS}view.php");
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
                    /*"password" =>MD5($_REQUEST['pass']),*/
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

<?php
//@ini_set('display_errors', 'on');
require_once ("{$ROOT}{$DS}model{$DS}ModelFacilities.php");
if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else $action="readAll";

switch ($action){
    case "readAll":
        $pagetitle = "Facilities";
        $view = "readAll";
        $tab_C = ModelFacilities::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

    case "delete":
        if(isset($_REQUEST['facilitesId'])){
            $facilitesId = $_REQUEST['facilitesId'];
            $facilities = ModelFacilities::select($facilitesId);
            $facilities->delete($facilitesId);
            header('Location:index.php?controller=facilities&action=readAll');
        }
        break;


    case "create":
        $pagetitle = "Add Facilities";
        $view = "create";
        require("{$ROOT}{$DS}view{$DS}view.php");
        break;

    case "created":
        if (isset($_REQUEST['Fname']) && isset($_REQUEST['desc'])) {


            $facilitesId = NULL;
            $facilityName = $_REQUEST['Fname'];
            $description = $_REQUEST['desc'];


            $recherche = ModelFacilities::select($facilitesId);
            if ($recherche == null) {
                $u = new ModelFacilities($facilitesId, $facilityName, $description);
                $tab = array(
                    "facilitesId" => $facilitesId,
                    "facilityName" => $facilityName,
                    "description" => $description,
                );
                $u->insert($tab);
                header('Location:index.php?controller=facilities&action=readAll');
            }
        }
        break;


    case "update":
        if(isset($_REQUEST['facilitesId'])){
            $facilitesId = $_REQUEST['facilitesId'];
            $facilities=ModelFacilities::select($facilitesId);
            if($facilities!=null){
                $pagetitle = "Edit Facilities";
                $view = "update";
                require ("{$ROOT}{$DS}view{$DS}view.php");
            }

        }
        break;

    case "updated":
        if (isset($_REQUEST['Fname']) && isset($_REQUEST['desc'])) {

            $x = $_REQUEST['facilitesId'];


            $tab = array(
                "facilitesId"=>$_REQUEST['facilitesId'],
                "facilityName" =>$_REQUEST["Fname"],
                "description" =>$_REQUEST["desc"]
            );
            $o = ModelFacilities::select($x);
            if($o!=null){
                $u=ModelFacilities::update($tab,$x);

                header('Location:index.php?controller=facilities&action=readAll');
            }
        }
        break;

}

?>

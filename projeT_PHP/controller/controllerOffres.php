<?php
//@ini_set('display_errors', 'on');
require_once ("{$ROOT}{$DS}model{$DS}ModelOffres.php");
if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else $action="readAll";

switch ($action){

       /* case "readAll":
		if (isset($_REQUEST['recherche'])){
			$TAB=$_REQUEST['recherche'];
				$reference=$TAB[0];
				$description=$TAB[1];
                $dateCreation=$TAB[2];
	$pagetitle = "Produit";
	$view = "readAll";
	   $tab_P = ModelProduit::RecheProduit($reference,$description,$dateCreation);
	require ("{$ROOT}{$DS}view{$DS}view.php");
	break;
}else{
		$pagetitle = "Produit";
        $view = "readAll";
       	$tab_P = ModelProduit::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
}*/



    case "readAll":
        $pagetitle = "Offres";
        $view = "readAll";
        $tab_C = ModelOffres::getAll();
        $tab_R = ModelOffres::getRoomTab();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;



    case "delete":
        if(isset($_REQUEST['offreId'])){
            $offreId = $_REQUEST['offreId'];
            $offres = ModelOffres::select($offreId);
            $offres->delete($offreId);
            header('Location:index.php?controller=offres&action=readAll');
            /*if($offres != null){
                // Supprimer l'image du dossier si elle existe
                $imagePath = $offres->getImage();
                if(!empty($imagePath) && file_exists($imagePath)) {
                    unlink($imagePath);
                }

                //$offres->delete($offreId);
                //header('Location:index.php?controller=offres&action=readAll');
            }*/
        }
        break;



    case "create":
        $pagetitle = "Add Offre";
        $view = "create";
        $tab_R = ModelOffres::getAllRoom();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

    case "created":


        if(isset($_REQUEST['tittre']) && isset($_REQUEST['description']) && isset($_REQUEST['roomType'])&&
            isset($_REQUEST['offreStart']) && isset($_REQUEST['offreEnd'])  && isset($_REQUEST['ShowSite'])){
            $offreId=NULL;
            $image=null;
            $roomType=$_REQUEST['roomType'];
            $title=$_REQUEST['tittre'];
            $description = $_REQUEST['description'];
            $offer_Starts=$_REQUEST['offreStart'];
            $offer_Ends=$_REQUEST['offreEnd'];
            $show_on_Site=$_REQUEST['ShowSite'];



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

            $recherche = ModelOffres::select($offreId);
            if($recherche==null){
                $u = new ModelOffres($offreId,$roomType,$title,$description,$image,$offer_Starts,$offer_Ends,$show_on_Site);
                $tab = array(
                    "offreId" =>$offreId,
                    "roomId" =>$roomType,
                    "title" =>$title,
                    "description" =>$description,
                    "image" =>$image,
                    "offer_Starts" =>$offer_Starts,
                    "offer_Ends" =>$offer_Ends,
                    "show_on_Site" =>$show_on_Site
                );
                $u->insert($tab);
                header('Location:index.php?controller=offres&action=readAll');
            }

        }
        break;



    case "update":
        if(isset($_REQUEST['offreId'])){
            $offreId = $_REQUEST['offreId'];
            $tab_R = ModelOffres::getAllRoom();
            $offres=ModelOffres::select($offreId);
            if($offres!=null){
                $pagetitle = "Edit Offre";
                $view = "update";
                require ("{$ROOT}{$DS}view{$DS}view.php");
            }

        }
        break;



    case "updated":
        if(isset($_REQUEST['offreId']) && isset($_REQUEST['titre']) && isset($_REQUEST['description']) &&
            isset($_REQUEST['roomType'])&& isset($_REQUEST['offreStart']) && isset($_REQUEST['offreEnd'])
            && isset($_REQUEST['ShowSite'])){

            $x = $_REQUEST['offreId'];
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
                "offreId"=>$_REQUEST['offreId'],
                "roomId" =>$_REQUEST["roomType"],
                "title" =>$_REQUEST["titre"],
                "description" =>$_REQUEST["description"],
                "image" =>$image,
                "offer_Starts" =>$_REQUEST["offreStart"],
                "offer_Ends" =>$_REQUEST["offreEnd"],
                "show_on_Site" =>$_REQUEST['ShowSite']
            );
            $o = ModelOffres::select($x);
            if($o!=null){
                $u=ModelOffres::update($tab,$x);

                header('Location:index.php?controller=offres&action=readAll');
            }
        }
        break;

}

?>

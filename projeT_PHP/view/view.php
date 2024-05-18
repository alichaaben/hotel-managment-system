
<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
    header("location:index.php?controller=login");
}

if ((($_SESSION['role'] == 'Admin'))||(($_SESSION['role'] == 'Hotelier'))) {


    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <!-- My CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="./assets/CSS/Gallery.css">-->
    <link rel="stylesheet" href="./assets/CSS/style.css">

    <title><?php echo $pagetitle; ?></title>
</head>
<body>
<?php

require_once($ROOT.$DS."view".$DS."header.php");
$filepath = "{$ROOT}{$DS}view{$DS}{$controller}{$DS}";
$filepath = $ROOT.$DS."view".$DS.$controller.$DS;
$filename = "view".ucfirst($view).ucfirst($controller).'.php';
require_once($filepath.$filename);
require_once("{$ROOT}{$DS}view{$DS}footer.php");
?>



</body>
</html>

<?php
    exit();
}
?>
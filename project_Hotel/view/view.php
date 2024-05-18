<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/CSS/checkInOut.css">
    <link rel="stylesheet" href="./assets/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="jetbrains://php-storm/navigate/reference?project=hotel Managment System MVC&path=./assets/CSS/headers.css">
    <link rel="stylesheet" href="./assets/CSS/index.css">

    <style>
        .booking__container .btn {
            height: 56px;
            width: 54px;
            /* padding: 1rem; */
            /* outline: none; */
            /* border: none; */
            font-size: -2.5rem;
            /* color: var(--white); */
            /* background-color: var(--primary-color); */
            /* border-radius: 100%; */
            /* cursor: pointer; */
            /* transition: 0.3s; */
            padding: 17px;
            background-color: #2c3855;
        }
    </style>

    <title><?php echo $pagetitle; ?></title>
</head>
<body id="text">
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

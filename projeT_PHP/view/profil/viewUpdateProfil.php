<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
    header("location:index.php?controller=login");
}




?>

<?php
$users=$userId->getIdUser();
?>

<!-- MAIN -->
<main>
    <form action="index.php?controller=users&action=updated&idUser=<?=$users?>" method="POST" enctype="multipart/form-data">
        <div class="table-data" >
            <div class="order" style="background-image: url(./assets/images/hotel.jpg);">
                <div class="profile-picture">
                    <h1 class="upload-icon">
                        <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                    </h1>
                    <input class="file-uploader" type="file" onchange="upload()" accept="image/*"/>
                </div>
            </div>
        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>User Info</h3>
                </div>
                <div class="form-group">
                    <label for="Name1">UserName</label>
                    <input type="hidden" name="idUser" value="<?=$users?>">
                    <input type="text" name="UserName" class="form-control" id="Name1" placeholder="UserName" value="<?=$userId->getUserName()?>">
                </div>
                <div class="form-group">
                    <label for="Email3">Email address</label>
                    <input type="email" name="email" class="form-control" id="Email3" placeholder="Email" value="<?=$userId->getEmailAddress()?>">
                </div>
                <div class="form-group">
                    <label for="Password4">Password</label>
                    <input type="password" name="pass" class="form-control" id="Password4" placeholder="Password" value="<?=$userId->getPassword()?>">
                </div>
                <div class="form-group">
                    <label for="creationDate">Creation Date</label>
                    <input type="date" name="creationDate" class="form-control" id="creationDate" placeholder="+216" value="<?=$userId->getCreationDate()?>">
                </div>
                <div class="form-group">
                    <label for="expirationDate">Expiration Date</label>
                    <input type="date" name="expirationDate" class="form-control" id="expirationDate" placeholder="+216" value="<?=$userId->getExpirationDate()?>">
                </div>

                <div class="form-group">
                    <label for="role">Roles</label>
                    <select class="form-control" id="role" name="role">

                        <option selected >Admin</option>
                        <option >Hotelier</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Account Status </label>
                    <select class="form-control" id="role" name="status">

                        <option selected>ON</option>
                        <option>OFF</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mr-2">save</button>
                <button class="btn btn-light">Cancel</button>

            </div>
        </div>

    </form>

    <hr>



</main>

<!-- MAIN -->
<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
    header("location:index.php?controller=login");
}

?>

<?php
$idUser=$users->getIdUser();
?>
<!-- MAIN -->
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Edit User</h3>
            </div>



            <form class="forms-sample" action="index.php?controller=users&action=updated&idUser=<?=$idUser?>" method="POST" enctype="multipart/form-data">
                <div class="profile-picture">
                    <h1 class="upload-icon">
                        <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                    </h1>
                    <input class="file-uploader" type="file" name="image" onchange="upload()" accept="image/*" value="<?=$users->getImage()?>"/>

                </div>
                <input type="hidden" name="idUser" value="<?=$idUser?>">
                <br>
                <div class="form-group">
                    <label for="Name1">UserName</label>

                    <input type="text" name="UserName" class="form-control" id="Name1" placeholder="UserName" value="<?=$users->getUserName()?>">
                </div>
                <div class="form-group">
                    <label for="Email3">Email address</label>
                    <input type="email" name="email" class="form-control" id="Email3" placeholder="Email" value="<?=$users->getEmailAddress()?>">
                </div>
                <div class="form-group">
                    <label for="Password4">Password</label>
                    <input type="password" name="pass" class="form-control" id="Password4" placeholder="Password" value="<?=$users->getPassword()?>">
                </div>
                <div class="form-group">
                    <label for="creationDate">Creation Date</label>
                    <input type="date" name="creationDate" class="form-control" id="creationDate" placeholder="+216" value="<?=$users->getCreationDate()?>">
                </div>
                <div class="form-group">
                    <label for="expirationDate">Expiration Date</label>
                    <input type="date" name="expirationDate" class="form-control" id="expirationDate" placeholder="+216" value="<?=$users->getExpirationDate()?>">
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
                <!-- <div class="toggle">
                     <input type="checkbox" id="temp" name="status">
                     <label for="temp">Account Status</label>
                 </div>-->
                <button type="submit" class="btn btn-primary mr-2">save</button>
                <button type="reset" class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>



    <hr>

    <footer class="footer">
        <div>

        </div>
        <br>
    </footer>


</main>

<!-- MAIN -->

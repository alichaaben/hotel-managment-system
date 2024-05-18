<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
    header("location:index.php?controller=login");
}




?>

<!-- MAIN -->
<main>
    <form class="forms-sample" action="index.php?controller=offres&action=created" method="POST" enctype="multipart/form-data">
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Special Offers</h3>
                </div>
                <div class="form-group">
                    <label for="titile">Title</label>
                    <input type="text" name="tittre" class="form-control" id="titile">
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control" name="description" id="desc" rows="5"></textarea>
                </div>


                <div class="form-group">
                    <label for="Rtype">Room Type</label>
                    <select class="form-control" id="Rtype" name="roomType">
                        <?php
                        foreach ($tab_R as $room) {
                        ?>
                        <option value="<?=$room['roomId']?>"><?=$room['nameRoom']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>


                <div class="form-group">
                    <label for="offSt">Offer Starts</label>
                    <input type="date" class="form-control" id="offSt" name="offreStart">
                </div>

                <div class="form-group">
                    <label for="offEnd">Offer Ends</label>
                    <input type="date" class="form-control" id="offEnd" name="offreEnd">
                </div>
                <div class="form-group">
                    <label for="discount">Photos for Offer</label>
                    <div class="profile-picture-room">
                        <h1 class="upload-icon">
                            <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                        </h1>
                        <input class="file-uploader" type="file" onchange="upload()" accept="image/*" name="image"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="site">Show on Site</label>
                    <input type="text" class="form-control" placeholder="Value" id="site" name="ShowSite">
                </div>


                <button type="submit" class="btn btn-primary mr-2">save</button>
                <button class="btn btn-light">Cancel</button>

            </div>
        </div>
    </form>
    <hr>

    <footer class="footer">
        <div>

        </div>
        <br>
    </footer>


</main>

<!-- MAIN -->
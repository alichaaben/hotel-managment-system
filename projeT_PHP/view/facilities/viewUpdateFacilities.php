<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
    header("location:index.php?controller=login");
}




?>

<?php
$facilId=$facilities->getFacilitesId();
?>

<!-- MAIN -->
<main>
    <form class="forms-sample" action="index.php?controller=facilities&action=updated&facilitesId=<?=$facilId?>" method="POST">
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Edit Facility</h3>
                </div>
                <div class="form-group">
                    <label for="Fname">Facility Name</label>
                    <input type="text" name="Fname" class="form-control" id="Fname" value="<?=$facilities->getFacilityName()?>">
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control" name="desc" id="desc" rows="5"><?=$facilities->getDescription()?></textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">save</button>
                <button class="btn btn-light">Cancel</button>

            </div>
        </div>
    </form>
    <hr>

</main>

<!-- MAIN -->
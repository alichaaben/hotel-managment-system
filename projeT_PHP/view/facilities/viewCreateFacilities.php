<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
    header("location:index.php?controller=login");
}




?>

<!-- MAIN -->
<main>
    <form class="forms-sample" action="index.php?controller=facilities&action=created" method="post">
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Add a New Facility</h3>
                </div>
                <div class="form-group">
                    <label for="Fname">Facility Name</label>
                    <input type="text" name="Fname" class="form-control" id="Fname">
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control" name="desc" id="desc" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">save</button>
                <button class="btn btn-light">Cancel</button>

            </div>
        </div>
    </form>


    <hr>



</main>

<!-- MAIN -->
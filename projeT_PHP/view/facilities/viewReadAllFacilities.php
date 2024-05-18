<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
    header("location:index.php?controller=login");
}




?>
<!-- MAIN -->
<main>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Current facilities</h3>
                <a href="index.php?controller=facilities&action=create"> <button type="submit" href="#" class="btn btn-primary"><i class="bx bx-plus"></i>Add Facilities</button></a>
            </div>

            <table id="facilty" >
                <thead>
                <tr>
                    <th class="Radu1" style="text-align: center;">Facility Name</th>
                    <th style="text-align: center;" >Description</th>
                    <th class="Radu3" style="text-align: center;" ></th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($tab_C as $facilities){

                ?>
                <tr>
                    <td><?=$facilities->getFacilityName()?></td>
                    <td><?=$facilities->getDescription()?></td>
                    <td>
                        <a href="index.php?controller=facilities&action=update&facilitesId=<?=$facilities->getFacilitesId()?>" class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class="bx bxs-edit"></i></a>
                        <a href="index.php?controller=facilities&action=delete&facilitesId=<?=$facilities->getFacilitesId()?>" class="delete_btn_ajax btn btn-danger"><i class="bx bx-trash"></i></a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            <div class="pagination-buttons">
                <button class="btn btn-outline-dark btn-icon-text" onclick="previousPage('facilty')">
                    <i class='bx bx-left-arrow'></i><span class="d-inline-block text-left"><b>Previous</b></span>
                </button>
                <button class="btn btn-outline-dark btn-icon-text" onclick="nextPage('facilty')">
                    <span class="d-inline-block text-left"><b>Next</b> <i class='bx bx-right-arrow' ></i></span>
                </button>
            </div>
        </div>
    </div>

</main>

<!-- MAIN -->
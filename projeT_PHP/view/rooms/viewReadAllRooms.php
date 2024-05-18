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
                <h3>Room Types</h3>
                <a href="index.php?controller=rooms&action=create"> <button type="submit" href="#" class="btn btn-primary"><i class="bx bx-plus"></i>Add room type</button></a>
            </div>

            <table id="my-table">
                <thead>
                <tr>
                    <th class="Radu1" style="text-align: center;">Name of room</th>
                    <th style="text-align: center;"> Area</th>
                    <th style="text-align: center;">Maximum Persons</th>
                    <th style="text-align: center;">Maximum Children</th>
                    <th style="text-align: center;">Price / night</th>
                    <th style="text-align: center;">status</th>
                    <th style="text-align: center;">Number of Rooms</th>
                    <th class="Radu3" style="text-align: center;"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($tab_C as $rooms){

                ?>
                <tr>
                    <td><?=$rooms->getNameRoom()?></td>
                    <td><?=$rooms->getArea()?> sq.m</td>
                    <td><?=$rooms->getMaxPersons()?></td>
                    <td><?=$rooms->getMaxChildren()?></td>
                    <td>$<?=$rooms->getPriceNight()?></td>
                    <?php if ($rooms->getStatus() == "Active") {
                        $status = "Active";
                    } else {
                        $status = "notActive";
                    }
                    ?>
                    <td><span class="status Active"><?=$status?></span></td>
                    <td><?=$rooms->getNumberRooms()?></td>
                    <td>
                        <a href="index.php?controller=rooms&action=update&roomId=<?=$rooms->getRoomId()?>" class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class="bx bxs-edit"></i></a>
<!--                        <a href="index.php?controller=rooms&action=delete&roomId=<?php /*=$rooms->getRoomId()*/?>" class="delete_btn_ajax btn btn-danger"><i class="bx bx-trash"></i></a>
-->                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>

            <div class="pagination-buttons">
                <button class="btn btn-outline-dark btn-icon-text" onclick="previousPage('my-table')">
                    <i class='bx bx-left-arrow'></i><span class="d-inline-block text-left"><b>Previous</b></span>
                </button>
                <button class="btn btn-outline-dark btn-icon-text" onclick="nextPage('my-table')">
                    <span class="d-inline-block text-left"><b>Next</b> <i class='bx bx-right-arrow' ></i></span>
                </button>
            </div>

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
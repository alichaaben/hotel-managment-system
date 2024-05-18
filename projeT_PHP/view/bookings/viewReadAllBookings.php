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
                <h3>New Bookings</h3>
                <a href="index.php?controller=bookings&action=create"> <button type="submit" href="#" class="btn btn-primary"><i class="bx bx-plus"></i> Add New Booking</button></a>
            </div>

            <table id="my-table">
                <thead>
                <tr>

                    <th class="Radu1" style="text-align: center;">Room</th>
                    <th style="text-align: center;"> Check in</th>
                    <th style="text-align: center;">Check out</th>
                    <th style="text-align: center;">First Name</th>
                    <th style="text-align: center;">Last Name</th>
                    <th style="text-align: center;">Email</th>
                    <th style="text-align: center;">Phone</th>
                    <th style="text-align: center;">Total</th>
                    <th class="Radu3" style="text-align: center;"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $NameRoom = "";
                foreach ($tab_C as $bookings) {
                    foreach ($tab_R as $room) {
                        if ($bookings->getRoomId() == $room['roomId']) {
                            $NameRoom = $room['nameRoom'];
                        }
                    }
                    ?>
                <tr>
                    <td><?=$NameRoom?></td>
                    <td> <?=$bookings->getCheckIn()?></td>
                    <td> <?=$bookings->getCheckOut()?></td>
                    <td> <?=$bookings->getFirstName()?></td>
                    <td> <?=$bookings->getLastName()?></td>
                    <td> <?=$bookings->getEmail()?></td>
                    <td> <?=$bookings->getPhone()?></td>
                    <td> $<?=$bookings->getTotalPrice()?></td>
                    <td>
                        <a href="index.php?controller=bookings&action=update&code=<?=$bookings->getCode()?>" class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class="bx bxs-edit"></i></a>
                        <a href="index.php?controller=bookings&action=delete&code=<?=$bookings->getCode()?>" class="delete_btn_ajax btn btn-danger"><i class="bx bx-trash"></i></a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>

            <div id="pagination-buttons">
                <button class="btn btn-outline-dark btn-icon-text" onclick="previousPage()">
                    <i class='bx bx-left-arrow'></i><span class="d-inline-block text-left"><b>Previous</b></span>
                </button>
                <button class="btn btn-outline-dark btn-icon-text" onclick="nextPage()">
                    <span class="d-inline-block text-left"><b>Next</b> <i class='bx bx-right-arrow' ></i></span>
                </button>
            </div>

        </div>
    </div>
</main>

<!-- MAIN -->
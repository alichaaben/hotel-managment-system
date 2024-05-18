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
                <h3>List of the current special offers</h3>
                <a href="index.php?controller=offres&action=create">  <button type="submit" href="#" class="btn btn-primary"><i class="bx bx-plus"></i>Add Offers</button></a>
            </div>

            <table style="text-align: center;" id="specila-offre">
                <thead>
                <tr>
                    <th class="Radu1" style="text-align: center;">Room Type</th>
                    <th style="text-align: center;">Title</th>
                    <th style="text-align: center;">Offer Starts</th>
                    <th style="text-align: center;">Offer Ends</th>
                    <th class="Radu3" style="text-align: center;"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $NameRoom = "f";
                foreach ($tab_C as $offre) {
                foreach ($tab_R as $room) {
                    if ($offre->getRoomId() == $room['roomId']) {
                        $NameRoom = $room['nameRoom'];
                    }
                }
                ?>
                <tr>
                    <td><?=$NameRoom?></td>
                    <td>
                        <p><?=$offre->getTitle()?></p>
                    </td>
                    <td><?=$offre->getOfferStarts()?></td>
                    <td><?=$offre->getOfferEnds()?></td>
                    <td>
                        <a href="index.php?controller=offres&action=update&offreId=<?=$offre->getOffreId()?>"  class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class="bx bxs-edit"></i></a>
                        <a href="index.php?controller=offres&action=delete&offreId=<?=$offre->getOffreId()?>"  class="delete_btn_ajax btn btn-danger"><i class="bx bx-trash"></i></a>
                    </td>
                </tr>

                </tbody>
                <?php } ?>
            </table>
            <div class="pagination-buttons">
                <button class="btn btn-outline-dark btn-icon-text" onclick="previousPage('specila-offre')">
                    <i class='bx bx-left-arrow'></i><span class="d-inline-block text-left"><b>Previous</b></span>
                </button>
                <button class="btn btn-outline-dark btn-icon-text" onclick="nextPage('specila-offre')">
                    <span class="d-inline-block text-left"><b>Next</b> <i class='bx bx-right-arrow' ></i></span>
                </button>
            </div>
        </div>
    </div>



    <hr>

</main>

<!-- MAIN -->
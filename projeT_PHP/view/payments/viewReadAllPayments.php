<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
    header("location:index.php?controller=login");
}else{



?>
<!-- MAIN -->
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Card Payments List</h3>
            </div>

            <table style="text-align: center;" id="specila-offre">
                <thead>
                <tr>

                    <th class="Radu1" style="text-align: center;">UserID</th>
                    <th style="text-align: center;">FirstName</th>
                    <th style="text-align: center;">LastName</th>
                    <th style="text-align: center;">Country</th>
                    <th style="text-align: center;">Email</th>
                    <th style="text-align: center;">CardID</th>
                    <th style="text-align: center;">City</th>
                    <th style="text-align: center;">Zip</th>
                    <th style="text-align: center;">Balance</th>
                    <th style="text-align: center;">CardNumber</th>
                    <th style="text-align: center;">CardName</th>
                    <th style="text-align: center;">CardType</th>
                    <th style="text-align: center;">Expiration</th>
                    <th style="text-align: center;">CVV</th>
                    <th class="Radu3" style="text-align: center;"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($tab_P as $Payments) {
                ?>
                <tr>

                    <td><?=$Payments->getUserID()?></td>
                    <td><?=$Payments->getFirstName()?></td>
                    <td><?=$Payments->getLastName()?></td>
                    <td><?=$Payments->getCountry()?></td>
                    <td><?=$Payments-> getEmail()?></td>
                    <td><?=$Payments->getCardID()?></td>
                    <td><?=$Payments->getCity()?></td>
                    <td><?=$Payments->getZip()?></td>
                    <td><?=$Payments->getBalance()?></td>
                    <td><?=$Payments->getCardNumber()?></td>
                    <td><?=$Payments->getCardName()?></td>
                    <td><?=$Payments->getCardType()?></td>
                    <td><?=$Payments->getExpiration()?></td>
                    <td><?=$Payments->getCVV()?></td>
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
<?php }?>
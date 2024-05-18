
<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
    header("location:index.php?controller=login");
}




?>
<!-- MAIN -->
<main>

    <div id="pageContent">
        <div class="flex-container">
            <ul class="box-info">
                <li class='bx1'>
                    <i class='bx bx-calendar-check'></i>
                    <span class="text">
						<h3><?=$nbBookings?></h3>
                        <p><b>New Bookings</b></p>
					</span>
                </li>
                <li class='bx2'>
                    <i class='bx bx-hotel'></i>
                    <span class="text">
						<h3><?=$nbRooms?></h3>
						<p><b>Room Types</b></p>
					</span>
                </li>
                <li class='bx3'>
                    <i class='bx bx-like'></i>
                    <span class="text">
						<h3><?=$nbClients?></h3>
						<p><b>Clients</b></p>
					</span>
                </li>
                <li class='bx4'>
                    <i class='bx bx-alarm'></i>
                    <span class="text">
						<h3><?=$nbOffres?></h3>
						<p><b>Special Offers</b></p>
					</span>
                </li>
            </ul>
        </div>

        <hr>
         <form action="index.php?controller=home&action=affichAll" method="POST">
              <div class="form-row">
                  <div class="col">
                      <input type="text" name="recherche[]" class="form-control" placeholder="Room">
                    </div>
                <div class="col">
                  <input type="text" name="recherche[]" class="form-control" placeholder="First Name">
                </div>
                <label id="Check-in">Check in</label>
                <div class="col">
                  <input type="date" name="recherche[]" class="form-control" placeholder="Check-in" id="Check-in">
                </div>
                <label id="Check-out">Check out</label>
                <div class="col">
                 <input type="date" name="recherche[]" class="form-control" placeholder="Check-out" id="Check-out">
                </div>
                <button type="submit" class="btn btn-primary">recherche</button>
              </div>
            </form>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Latest Bookings</h3>
                </div>

                <table id="my-table">
                    <thead>
                    <tr>

                        <th class="Radu1" style="text-align: center;">Room</th>
                        <th style="text-align: center;"> Check in</th>
                        <th style="text-align: center;">Check out</th>
                        <th style="text-align: center;">First Name</th>
                        <th style="text-align: center;">Last Name</th>

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


            <div id="chartBoxII">
                <canvas id="myChartII" style="width:400px; height:400px;"></canvas>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const ctxII = document.getElementById('myChartII').getContext('2d');
                const myChartII = new Chart(ctxII, {
                    type: 'doughnut',
                    data:{
                        labels: [

                            'Rooms',
                            'Bookings',
                            'Clients'
                        ],
                        datasets: [{
                            label: 'My First Dataset',
                            data: [<?=$nbRooms?>,<?=$nbBookings?>,10],
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)'
                            ],
                            hoverOffset: 4
                        }]
                    }
                });
            </script>


        </div>
        <hr>


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>List of the current special offers</h3>
                </div>

                <table  id="specila-offre">
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
                    foreach ($tab_offres as $offre) {
                    foreach ($tab_RoomOffres as $room) {
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
                       <!-- <td>
                            <a href="index.php?controller=offres&action=update&offreId=<?php /*=$offre->getOffreId()*/?>"  class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class="bx bxs-edit"></i></a>
                            <a href="index.php?controller=offres&action=delete&offreId=<?php /*=$offre->getOffreId()*/?>"  class="delete_btn_ajax btn btn-danger"><i class="bx bx-trash"></i></a>
                        </td>-->
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


                <div class="chartBoxII">
                    <canvas id="myChart" style="width:500px; height:400px;"></canvas>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    const ctx = document.getElementById('myChart').getContext('2d');
                    const myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                            datasets: [{
                                label: '# of Votes',
                                data: [12, 19, 3, 5, 2, 3],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                </script>


        </div>







        <hr>

    </div>
</main>
<!-- MAIN -->
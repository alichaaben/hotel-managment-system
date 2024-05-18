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
                <h3>Rooms Galleries</h3>
            </div>
            <!-------------------------------------->


            <div class="containerk">
                <!-- Dropdown Filter Section -->
                <div class="row mt-5">
                    <div class="col-12">

                        <select  class="form-select mb-2" id="filter-dropdown">
                            <option value="all" selected>Show all</option>
                            <option value="nature">Nature</option>
                            <option value="cars">Cars</option>
                            <option value="people">People</option>
                        </select>
                    </div>
                </div>

                <!-- Filterable Images / Cards Section -->
                <div class="row px-2 mt-4 gap-3" id="filterable-cards">
                    <div class="card p-0" data-name="nature">
                        <img src="./assets/images/room2.jpg" alt="img" onclick="openCarousel(['./assets/images/room1.jpg', './assets/imagesroom2.jpg', './assets/images/room3.jpg'])">
                        <div class="card-body">
                            <h6 class="card-title">Mountains</h6>
                            <p class="card-text">Lorem ipsum dolor..</p>
                        </div>
                    </div>
                    <div class="card p-0" data-name="nature">
                        <img src="./assets/images/room2.jpg" alt="img">
                        <div class="card-body">
                            <h6 class="card-title">Lights</h6>
                            <p class="card-text">Lorem ipsum dolor..</p>
                        </div>
                    </div>
                   <!--  <div class="card p-0" data-name="nature">
                        <img src="./assets/imagesroom2.jpg" alt="img">
                        <div class="card-body">
                            <h6 class="card-title">Nature</h6>
                            <p class="card-text">Lorem ipsum dolor..</p>
                        </div>
                    </div>
                    <div class="card p-0" data-name="cars">
                        <img src="./assets/images/room2.jpg"alt="img">
                        <div class="card-body">
                            <h6 class="card-title">Retro</h6>
                            <p class="card-text">Lorem ipsum dolor..</p>
                        </div>
                    </div>
                    <div class="card p-0" data-name="cars">
                        <img src="./assets/images/room2.jpg" alt="img">
                        <div class="card-body">
                            <h6 class="card-title">Fast</h6>
                            <p class="card-text">Lorem ipsum dolor..</p>
                        </div>
                    </div>
                    <div class="card p-0" data-name="cars">
                        <img src="../assets/images/room2.jpg" alt="img">
                        <div class="card-body">
                            <h6 class="card-title">Classic</h6>
                            <p class="card-text">Lorem ipsum dolor..</p>
                        </div>
                    </div>
                    <div class="card p-0" data-name="people">
                        <img src="./assets/images/room2.jpg" alt="img">
                        <div class="card-body">
                            <h6 class="card-title">Men</h6>
                            <p class="card-text">Lorem ipsum dolor..</p>
                        </div>
                    </div>
                    <div class="card p-0" data-name="people">
                        <img src="./assets/images/room2.jpg" alt="img">
                        <div class="card-body">
                            <h6 class="card-title">Girl</h6>
                            <p class="card-text">Lorem ipsum dolor..</p>
                        </div>
                    </div>-->
                </div>
            </div>

            <!-- Popup Carousel Modal -->
            <!-- Popup Carousel Modal -->
            <div id="imageModal" class="modal">
                <span class="close" onclick="closeCarousel()">&times;</span>
                <div class="carousel">
                    <img src="./assets/images/room2.jpg" alt="carousel-img" class="carousel-img" id="carousel-img">
                    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                    <button class="next" onclick="changeSlide(1)">&#10095;</button>
                </div>
            </div>


            <!---------------------------------------->

        </div>
    </div>
    <hr>



</main>

<!-- MAIN -->
<?php
session_start();


?>
<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxl-magento'></i>
        <span class="text">4_Season</span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="index.php?controller=home&action=affichAll" id="dashboard-link">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <?php
        if($_SESSION['role']=='Admin'){
            echo'<li><a href="index.php?controller=users&action=readAll" id="user-link"><i class="bx bxs-user" ></i><span class="text">Users</span></a></li>';
        }?>

        <li>
            <a href="index.php?controller=payments&action=readAll">
                <i class='bx bx-task'></i>
                <span class="text">Payments</span>
            </a>
        </li>
        <li>
            <a href="index.php?controller=bookings&action=readAll" id="booking-link">
                <i class='bx bx-arch'></i>
                <span class="text">Bookings</span>
            </a>
        </li>
        <li>
            <a href="index.php?controller=rooms&action=readAll" id="room-link">
                <i class='bx bxs-bed' ></i>
                <span class="text">Rooms</span>
            </a>
        </li>
        <li>
            <a href="index.php?controller=offres&action=readAll" id="offre-link">
                <i class='bx bxs-offer'></i>
                <span class="text">Special Offers</span>
            </a>
        </li>
        <li>
            <a href="index.php?controller=facilities&action=readAll" id="facili-link">
                <i class='bx bx-dish'></i>
                <span class="text"> Hotel Facilities</span>
            </a>
        </li>
        <li>
            <a href="index.php?controller=gallerys&action=readAll" id="gallery-link">
                <i class='bx bx-images'></i>
                <span class="text">Rooms Galleries</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->



<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
   <nav>
        <i class='bx bx-menu' ></i>

       <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
            </div>
        </form>


        <a href="#" class="notification">
            <i class="fa-regular fa-bell"></i>
            <span class="num">8</span>
        </a>
        <div class="profile-dropdown">
            <?php
            require_once ("{$ROOT}{$DS}model{$DS}ModelUsers.php");
            $nom= $_SESSION['nom'];
            $tab_prof = ModelUsers::getUsersId($nom);
            $img=$tab_prof->image;

            ?>
            <div onclick="toggle()" class="profile-dropdown-btn">
                    <div class="profile-img" style="
        position: relative;
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        background: url(<?=$img?>);
        background-size: cover;
    ">

                    <i class="fa-solid fa-circle"></i>

                </div>
            </div>

            <ul class="profile-dropdown-list">
                <li class="profile-dropdown-list-item">
                    <a href="index.php?controller=profil&action=update&nom=<?=$_SESSION['nom']?>">
                        <i class="fa-regular fa-user"></i>
                        Edit Profile

                    </a>
                </li>

                <li class="profile-dropdown-list-item">
                    <a href="index.php?controller=connexion&action=deconnecter">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        Log out
                    </a>
                </li>
            </ul>
        </div>


    </nav>
    <!-- NAVBAR -->

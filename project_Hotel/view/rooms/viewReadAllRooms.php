<?php

session_start();

if((!isset($_SESSION['nom'])) || (empty($_SESSION['nom'])))
{
    header("location:index.php?controller=login");
}




?>

<header class="section__container header__container bottom-0">
    <div class="header__image__container">
        <div class="header__content">
            <h1>Enjoy Your Dream Vacation</h1>
            <p>Book Hotels, Flights and stay packages at lowest price.</p>
        </div>
        <div class="booking__container">
            <form class="forms-sample" action="index.php?controller=rooms&action=readAll" method="POST" enctype="multipart/form-data">

                <div class="form__group">
                    <div class="input__group">
                        <input type="text" name="recherche[]" placeholder="" />
                        <label>Check In</label>
                    </div>
                    <p>Add date</p>
                </div>
                <div class="form__group">
                    <div class="input__group">
                        <input type="text" name="recherche[]" />
                        <label>Check Out</label>
                    </div>
                    <p>Add date</p>
                </div>
                <div class="form__group">
                    <div class="input__group">
                        <select class="form-select" aria-label="Default select example" name="recherche[]">
                            <option selected>Adults</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="6">6</option>
                        </select>
                    </div>

                    <p>Add guests</p>
                </div>
                <div class="form__group">
                    <div class="input__group">
                        <select class="form-select" aria-label="Default select example" name="recherche[]">
                            <option selected>Children</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>

                    <p>Add guests</p>
                </div>


            <button class="btn btn-info" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</header>

<div class="album py-5 bg-body-tertiary">

    <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                function assignImagePaths($imagePathsString) {
                    $pathsArray = explode(',', $imagePathsString);

                    $imageVariables = [];

                    foreach ($pathsArray as $index => $path) {
                        $cleanPath = ltrim($path, './');

                        $variableName = 'var' . ($index + 1);
                        $imageVariables[$variableName] = $cleanPath;
                    }

                    return $imageVariables;
                }
                ?>

                <?php

                foreach ($tab_C as $rooms) {
                    $img = $rooms->getImages();
                    $imageVars = assignImagePaths($img);
                ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="/projeT_PHP/<?= $imageVars['var1'] ?>" width="100%" height="225" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text"><?=$rooms->getNameRoom()?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn  btn-info"><a href="index.php?controller=rooms&action=update&roomId=<?=$rooms->getRoomId()?>">See Details</a> </button>
                                </div>
                                <h4 class="fw-bold"><?=$rooms->getPriceNight() ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>


    </div>

</div>

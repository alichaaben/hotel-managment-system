<?php

session_start();

if((!isset($_SESSION['nom'])) || (empty($_SESSION['nom'])))
{
    header("location:index.php?controller=login");
}




?>


<?php
$roomId=$idRooms->getRoomId();
?>
<section>

    <div class="bg-white">
        <div class="pt-6">

            <?php
            function assignImagePaths($imagePathsString) {
                $pathsArray = explode(',', $imagePathsString);

                $imageVariables = [];

                foreach ($pathsArray as $index => $path) {
                    $cleanPath = ltrim($path, './');


                    if (!in_array($cleanPath, $imageVariables)) {
                        $imageVariables[] = $cleanPath;
                    }
                }

                return $imageVariables;
            }
            ?>
            <?php
            $img = $idRooms->getImages();
            $imageVars = assignImagePaths($img);
            ?>
            <!-- Image gallery -->
            <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">

                    <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
                        <img src="/projeT_PHP/<?= $imageVars[0] ?>" alt="Two each of gray, white, and black shirts laying flat." class="h-full w-full object-cover object-center">
                    </div>
                    <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                        <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                            <img src="/projeT_PHP/<?= $imageVars[1] ?>" alt="Model wearing plain black basic tee." class="h-full w-full object-cover object-center">
                        </div>
                        <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                            <img src="/projeT_PHP/<?= $imageVars[3] ?>" alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
                        </div>
                    </div>
                    <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                        <img src="/projeT_PHP/<?= $imageVars[2] ?>" alt="Model wearing plain white basic tee." class="h-full w-full object-cover object-center">
                    </div>

            </div>



            <!-- Product info -->
            <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                </div>

                <!-- Options -->
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <h2 class="sr-only">room information</h2>
                    <p class="text-3xl tracking-tight text-gray-900">$<?=$idRooms->getPriceNight()?></p>



                    <form class="mt-10">



                    </form>
                </div>

                <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                    <!-- Description and details -->
                    <div>
                        <h2>Room Type: <strong><?=$idRooms->getNameRoom()?></strong></h2>


                        <div class="space-y-6">
                            <p class="text-base text-gray-900"><?=$idRooms->getDescription()?></p>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h3 class="text-sm font-medium text-gray-900">Facilities</h3>

                        <div class="mt-4">
                            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                <li class="text-gray-400"><span class="text-gray-600"><?=$idRooms->getRoomFacilities()?></span></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<hr>


<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>Checkout form</h2>
        </div>

        <div class="row g-5">

            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate method="POST" action="index.php?controller=bookings&action=created&roomId=<?=$roomId?>">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">First name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email </label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="checkIN" class="form-label">CheckIn</label>
                            <input type="date" class="form-control" id="checkIN" name="checkIN" >
                        </div>
                        <div class="col-12">
                            <label for="checkout" class="form-label">CheckOut</label>
                            <input type="date" class="form-control" id="checkout" name="checkout" >
                        </div>

                        <div class="col-12">
                            <label for="phone" class="form-label">phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="+216" required>

                        </div>

                        <div class="col-12">
                            <label for="TotalPrice" class="form-label">Total Price</label>
                            <input type="text" class="form-control" id="TotalPrice" name="TotalPrice" readonly value="<?=$idRooms->getPriceNight()?>">
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">Address 2 <span class="text-body-secondary">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
                        </div>



                        <hr class="my-4">



                        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="my-5 pt-5 text-body-secondary text-center text-small">
        <p class="mb-1">&copy; 2017–2024 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>


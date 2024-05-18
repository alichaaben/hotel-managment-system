<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/CSS/index.css">

</head>
<body>

<header class="bg-white">
    <nav>
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <div class="col-md-3 mb-2 mb-md-0">
                    <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                        <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                    </a>
                </div>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2">Facilities</a></li>
                    <li><a href="#" class="nav-link px-2">clients</a></li>
                    <li><a href="#" class="nav-link px-2">Rooms</a></li>
                    <li><a href="#" class="nav-link px-2">About</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-outline-primary me-2"> <a href="index.php?controller=login"> Login</a></button>
                    <button type="button" class="btn btn-primary"><a href="index.php?controller=login">Sign-up</a></button>
                </div>
            </header>
        </div>

    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-10"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <div class="-mx-3">
                            <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                                Product
                                <!--
                                  Expand/collapse icon, toggle classes based on menu open state.

                                  Open: "rotate-180", Closed: ""
                                -->
                                <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- 'Product' sub-menu, show/hide based on menu state. -->
                            <div class="mt-2 space-y-2" id="disclosure-1">
                                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Analytics</a>
                                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Engagement</a>
                                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Security</a>
                                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Integrations</a>
                                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Automations</a>
                                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Watch demo</a>
                                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact sales</a>
                            </div>
                        </div>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                    </div>
                    <div class="py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <video width="80%" height="250px" style="border-radius: 50px ; margin: auto"  controls autoplay>
        <source src="Assetss/Videos/CONTINENTAL%20HOTEL%20Budapest%20promo%20video(4K_HD).webm" type="video/webm">

        Your browser does not support the video tag.
    </video>
</section>
<section class="section__container feature__container" id="feature">
    <p class="section__subheader">FACILITIES</p>
    <h2 class="section__header">Core Features</h2>
    <div class="feature__grid">
        <div class="feature__card">
            <span><i class="ri-thumb-up-line"></i></span>
            <h4>Have High Rating</h4>
            <p>
                We take pride in curating a selection of hotels that consistently
                receive high ratings and positive reviews.
            </p>
        </div>
        <div class="feature__card">
            <span><i class="ri-time-line"></i></span>
            <h4>Quite Hours</h4>
            <p>
                We understand that peace and uninterrupted rest are essential for a
                rejuvenating experience.
            </p>
        </div>
        <div class="feature__card">
            <span><i class="ri-map-pin-line"></i></span>
            <h4>Best Location</h4>
            <p>
                At our hotel booking website, we take pride in offering
                accommodations in the most prime and sought-after locations.
            </p>
        </div>
        <div class="feature__card">
            <span><i class="ri-close-circle-line"></i></span>
            <h4>Free Cancellation</h4>
            <p>
                We understand that travel plans can change unexpectedly, which is
                why we offer the flexibility of free cancellation.
            </p>
        </div>
        <div class="feature__card">
            <span><i class="ri-wallet-line"></i></span>
            <h4>Payment Options</h4>
            <p>
                Our hotel booking website offers a range of convenient payment
                options to suit your preferences.
            </p>
        </div>
        <div class="feature__card">
            <span><i class="ri-coupon-line"></i></span>
            <h4>Special Offers</h4>
            <p>
                Whether you're planning a romantic getaway, or a business trip, our
                carefully curated special offers cater to all your needs.
            </p>
        </div>
    </div>
</section>
<section class="client">
    <div class="section__container client__container">
        <h2 class="section__header">What our client say</h2>
        <div class="client__grid">
            <div class="client__card">
                <img src="..." alt="client" />
                <p>
                    The booking process was seamless, and the confirmation was
                    instant. I highly recommend WDM&Co for hassle-free hotel bookings.
                </p>
            </div>
            <div class="client__card">
                <img src="assets/client-2.jpg" alt="client" />
                <p>
                    The website provided detailed information about hotel, including
                    amenities, photos, which helped me make an informed decision.
                </p>
            </div>
            <div class="client__card">
                <img src="assets/client-3.jpg" alt="client" />
                <p>
                    I was able to book a room within minutes, and the hotel exceeded
                    my expectations. I appreciate WDM&Co's efficiency and reliability.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section__container popular__container">
    <h2 class="section__header" style="font-weight: bold ; text-align: center">Our Sites</h2>
    <div class="popular__grid">
        <div class="popular__card">
            <img src="./assets/Images/hotel-1.jpg" alt="popular hotel" />
            <div class="popular__content">
                <div class="popular__card__header">
                    <h4>The Plaza Hotel</h4>
                    <h4>$499</h4>
                </div>
                <p>New York City, USA</p>
            </div>
        </div>
        <div class="popular__card">
            <img src="./assets/Images/hotel-3.jpg" alt="popular hotel" />
            <div class="popular__content">
                <div class="popular__card__header">
                    <h4>Ritz Paris</h4>
                    <h4>$549</h4>
                </div>
                <p>Paris, France</p>
            </div>
        </div>
        <div class="popular__card">
            <img src="./assets/Images/hotel-4.jpg" alt="popular hotel" />
            <div class="popular__content">
                <div class="popular__card__header">
                    <h4>The Peninsula</h4>
                    <h4>$599</h4>
                </div>
                <p>Hong Kong</p>
            </div>
        </div>
        <div class="popular__card">
            <img src="./assets/Images/hotel-5.jpg" alt="popular hotel" />
            <div class="popular__content">
                <div class="popular__card__header">
                    <h4>Atlantis The Palm</h4>
                    <h4>$449</h4>
                </div>
                <p>Dubai, United Arab Emirates</p>
            </div>
        </div>
        <div class="popular__card">
            <img src="./assets/Images/hotel-6.jpg" alt="popular hotel" />
            <div class="popular__content">
                <div class="popular__card__header">
                    <h4>The Ritz-Carlton</h4>
                    <h4>$649</h4>
                </div>
                <p>Tokyo, Japan</p>
            </div>
        </div>
        <div class="popular__card">
            <img src="./assets/Images/hotel-1.jpg" alt="popular hotel" />
            <div class="popular__content">
                <div class="popular__card__header">
                    <h4>Marina Bay Sands</h4>
                    <h4>$549</h4>
                </div>
                <p>Singapore</p>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container-fluid "  style="margin-top: 50px ; background-color: #20263e ">

        <div class="row p-5" >
            <div class=" col-6 col-md-2 mb-3">
                <h5 class="fw-bold text-white">Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link text-white  p-0">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link text-white p-0">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link text-white p-0">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link text-white p-0">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link text-white p-0">About</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5 class="fw-bold text-white">Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class=" p-0 nav-link text-white ">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-white">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" clas="nav-link p-0  ">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5 class="fw-bold text-white">Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                </ul>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
                <form>
                    <h5 class="fw-bold text-white">Subscribe to our newsletter</h5>
                    <p>Monthly digest of what's new and exciting from us.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between border-top">
            <p class="fw-bold text-white">&copy; 2024 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
            </ul>
        </div>
    </div>
</footer>


</body>
</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FLYBANGLA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="css/public.css">
<script src="js/public.js"></script>

</head>

<body>

    <div class="main">
        <?php include 'partials/_loginmodal.php'; ?>
        <?php include 'partials/_signupmodal.php'; ?>
        <!-- topplane -->
        <div class="container-fluid" id="index_bg">
            <div id="navbar1">
                <?php include 'layout/header.php'; ?>
            </div>
            <?php include 'layout/header.php'; ?>

            <div class="container my-5 p-4" style="height:40vh;">

                <h1 class="text-white" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                    FLY WITH ELEGENCE<br>
                    FLY WITH <b style="color:crimson">FLY</b><b style="color:darkgreen">BANGLA</b>
                </h1>
                <button onclick="scrolltosearchflight()" class="btn btn-outline-light btn-lg m-1 px-4 text-danger fw-bold fs-5" style="border-end-start-radius: 30px; border-top-right-radius: 30px;">BOOK FLIGHT</button>
            </div>
        </div>
        <!-- topplane -->

        <!-- 2ndpanel -->
        <div class="container-fluid" id="_2nd_panel">
            <div class="container" id="about_us">
                <div class="row justify-content-center ">
                    <div class="col-5 mx-3">
                        <p>Welcome on board</p>
                        <h2 class=mb-2>
                            Fly with FlyBangla right away
                        </h2>
                        <p>FlyBangla Airways is proud to be one of the youngest global airlines to serve all six continents, and thanks to our customers’ response to our offerings, we are also the world’s fastest-growing airline. We connect more than 140 destinations on the map every day, with a fleet of the latest-generation aircraft.</p>
                        <p>It is our immense pleasure to inform you that FlyBangla has incorporated world class Booking Engine for its cherished passengers to provide the best service. Enjoy amazing discounts, get your e-ticket, customize your booking, and find out the status of your flight in real time through our Website.</p>

                    </div>
                    <div class="col-5 mx-3 py-2">
                        <iframe width="450" height="350" src="https://www.youtube.com/embed/n87AUoqyEVc?autoplay=1&mute=1&loop=1" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
        <!-- 2ndpanel -->

        <!-- 3rdpanel -->
        <div class="container-fluid">

            <div class="container" id="partners">

                <div class="row justify-content-center align-content-center">
                    <div class="col-3 d-flex flex-wrap justify-content-center ">
                        <img src="img/a4.png" alt="..." width="150" height="150">
                        <h5 class="text-center my-2"> Airline Of The Year <br>For the 4th time </h5>
                    </div>
                    <div class="col-3 d-flex flex-wrap justify-content-center ">
                        <img src="img/a1.jpg" alt="..." width="150" height="150">
                        <h5 class="text-center my-2"> 5 Star Service Rating <br>Award Winner </h5>
                    </div>
                    <div class="col-3 d-flex flex-wrap justify-content-center ">
                        <img src="img/a3.png" alt="..." width="130" height="150">
                        <h5 class="text-center my-2">5-Star COVID-19 Airline Safety Rating </h5>
                    </div>
                </div>
            </div>

        </div>
        <!-- 3rdpanel -->

        <!-- 4thpanel -->
        <div class="container-fluid " id="_4thpanel">
            <div class="row justify-content-around">
                <div class="col-5">

                    <div class=" card " id="contactus">
                        <div class="card-header border-0">
                            <h5 class="text-center">Share Your Query</h5>
                        </div>

                        <div class="card-body p-4">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                            <input type="phone" class="form-control" id="exampleFormControlInput1">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Your Quey</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <button type="submit" class="btn btn-danger" style="float: right; ">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-5 p-4" id="newsletter">

                    <div style="padding-top:100px;">
                        <h5 style="color:white; ">Never miss an offer <br>
                            Subscribe & be the first to receive our exclusive offers</h5>
                        <div class="input-group my-3">
                            <input type="text" class="form-control" placeholder="Email" aria-label="Server">
                            <input type="text" class="form-control " list="datalistOptions" placeholder="Preferred Deperture City" aria-label="First name">
                            <datalist id="datalistOptions">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>

                        </div>

                        <p style="color:white;"> <input s class="form-check-input" type="checkbox" value="" id="flexCheckChecked"> I would like to get offers and news from FlyBangla Airways. I have read and
                            understood the privacy policy.</p>
                        <button type="submit" class="btn btn-outline-light">Subscribe</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- 4thpanel  -->

        <!-- 5th panel  -->

        <div class="container-fluid">

            <div class="container" id="partners">

                <div class="row justify-content-center align-content-center">
                    <h5 class="text-center text-decoration-underline">AFFILIATED PARTNERS</h5>

                    <div class="row mt-5">
                        <div class="col-3 d-flex flex-wrap justify-content-center"> <img src="img/b1.png" alt="..." width="100" height="100"></div>
                        <div class="col-3 d-flex flex-wrap justify-content-center"> <img src="img/b2.jpg" alt="..." width="100" height="100"></div>
                        <div class="col-3 d-flex flex-wrap justify-content-center"> <img src="img/b9.png" alt="..." width="100" height="100"></div>
                        <div class="col-3 d-flex flex-wrap justify-content-center"> <img src="img/b7.png" alt="..." width="100" height="100"></div>
                        <div class="col-3 d-flex flex-wrap justify-content-center"> <img src="img/b5.png" alt="..." width="100" height="100"></div>
                        <div class="col-3 d-flex flex-wrap justify-content-center"> <img src="img/b6.png" alt="..." width="100" height="100"></div>
                        <div class="col-3 d-flex flex-wrap justify-content-center"> <img src="img/b3.png" alt="..." width="100" height="100"></div>
                        <div class="col-3 d-flex flex-wrap justify-content-center"> <img src="img/b8.png" alt="..." width="100" height="100"></div>


                    </div>


                </div>
            </div>

        </div>
        <!-- 5th panel  -->

        <div class="foot" id="footerpanel">
            <?php include 'layout/footer.php'; ?>
        </div>


        <!-- flightcard -->
        <div class=" container card bg-transparent px-3 border-0 " id="flightcard">
            <div class="card-header bg-transparent border-0">
                <ul class="nav nav-tabs card-header-tabs ">
                    <li class="nav-item  mx-2 col-md-4">
                        <a class="nav-link tablink" id="defaulttab" onclick="openPage('book', this,'whitesmoke')">Book Flight</a>
                    </li>
                    <li class="nav-item  mx-2 col-md-3">
                        <a class="nav-link tablink " onclick="openPage('check', this,'whitesmoke')">Check Your Trip</a>
                    </li>
                    <li class="nav-item mx-2 col-md-3">
                        <a class="nav-link tablink " onclick="openPage('schedule', this,'whitesmoke')">Flight Schedule</a>
                    </li>

                </ul>
            </div>
            <div class="card-body bg-white rounded-2 p-4" style="border:  0.5px solid lightgrey; ">

                <div id="book" class="container tabcontent ">
                    <div class="row px-3">
                        <div class="col-6">
                            Flying from
                            <input type="text" class="form-control my-2" list="datalistOptions" placeholder="Deperture Airport" aria-label="First name">
                            <datalist id="datalistOptions">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>
                        </div>
                        <div class="col-6">
                            Flying to
                            <input type="text" class="form-control my-2" placeholder="Arrival Airport" aria-label="First name">
                        </div>
                    </div>

                    <div class="row px-3">
                        <div class="col-4">
                            Depart Date (D-M-Y)
                            <input id="startDate" class="form-control  my-2" type="date">
                        </div>
                        <div class="col-4">
                            Passenger
                            <input type="text" class="form-control my-2" placeholder="No. of Passenger">
                        </div>
                        <div class="col-4">
                            Class
                            <input type="text" class="form-control my-2" placeholder="Select class">
                        </div>
                    </div>
                    <div class="d-flex my-2 px-3 justify-content-end align-items-end">
                        <div class="col-3 mx-3">
                            <input type="text" class="form-control " placeholder="Add Promo">
                        </div>

                        <button class="btn btn-danger  text-light fw-bold fs-5 col-4 ">Search Flight</button>

                    </div>

                </div>


                <div id="check" class="container tabcontent">
                    <div class="d-flex py-5  justify-content-center ">
                        <div class="col-6 mx-3">

                            <input type="text" class="form-control mt-2" placeholder="Your Trip Reference No.">
                            <small class="text-muted fst-italic">* You can find your Reference Number on the e-ticket provided during booking</small>
                        </div>

                        <button class="btn btn-danger text-light fw-bold  col-3 ">Search Flight</button>

                    </div>

                    <div class="d-flex flex-column">

                    </div>
                </div>

                <div id="schedule" class="container tabcontent">


                </div>



            </div>
        </div>

        <!-- flightcard -->

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>

</html>
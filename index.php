<?php
/**
 * File Name: index.php
 * Purpose: This file serves as the front-end entry point for the BoardingHub website. 
 * It displays available rooms, handles user registration, login, and other interactions.
 * Authors: [Mark John Jopia] [Kenneth Bacaresas] [Russell Osias]
 * Contact: [markjohnjopia1@gmail.com] [ken.ae26@gmail.com] [osiasrussell@gmail.com]
 * Date Created: [May 4, 2024]
 * Last Modified: [May 18,2024]
 * 
 * Overview:
 * This file includes the main HTML structure and integrates PHP to 
 * fetch and display dynamic content from the database.
 * It manages:
 * - Display of available rooms
 * - User registration and login forms
 * - Navigation and layout components
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boarding Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css ">

    <style>
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px){
            .availability-form{
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>

</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-4 fw-bold fs-3 h-font"  href="index.php">Boarding Hub</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item me-2">
            <a class="nav-link" href="#">Rooms</a>
            </li>
            <li class="nav-item me-2">
            <a class="nav-link" href="#">Facilities</a>
            </li>
            <li class="nav-item me-2">
            <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item me-2">
            <a class="nav-link" href="#">About Us</a>
            </li>
        </ul>
            <div class="d-flex" role="search">
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register
                </button>
            </div>
        </div>
    </div>
    </nav>

    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title fs-5 d-flex align-item-center" id="staticBackdropLabel">
                        <i class="bi bi-person-circle"></i> User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-dark shadow-none">Login</button>
                            <a href="javascript: void(0)">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title fs-5 d-flex align-item-center" id="staticBackdropLabel">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                        Note: Your details must match with you ID (National ID, Drivering License, Passport, etc.) in order to check-in.
                    </span>
                    <div class="container-fliud">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Picture</label>
                                <input type="file" class="form-control shadow-none">
                            </div>
                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control shadow-none" rows="1"></textarea>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Pincode</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Date of birth</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-1">
                        <button type="submit" class="btn btn-dark shadow-none">Register</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Carousel -->

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/7.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/8.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/9.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/10.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/11.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/12.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/13.jpg" class="w-100 d-block"/>
                </div>
            </div>
        </div>
    </div>

    <!-- check avalability form -->

    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Room Availabity</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>  
    </div>

    <!-- Our Rooms form -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR ROOMS</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3 " >
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room</h5>
                        <h6 class="mb-4">₱5k per month</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                2 rooms
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                1 Bathroom
                            </span>   
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                1 Bed
                            </span>     
                        </div>
                        <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                WIFI
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                TV
                            </span>   
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                Room Heater
                            </span>     
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i> 
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3 " >
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room</h5>
                        <h6 class="mb-4">₱5k per month</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                2 rooms
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                1 Bathroom
                            </span>   
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                1 Bed
                            </span>     
                        </div>
                        <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                WIFI
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                TV
                            </span>   
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                Room Heater
                            </span>     
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i> 
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3 " >
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room</h5>
                        <h6 class="mb-4">₱5k per month</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                2 rooms
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                1 Bathroom
                            </span>   
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                1 Bed
                            </span>     
                        </div>
                        <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                WIFI
                            </span> 
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                TV
                            </span>   
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-warp">
                                Room Heater
                            </span>     
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i> 
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms > > ></a>
            </div>
        </div>
    </div>

    <!-- Our Facilities form -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR FACILITIES</h2>

    <div class="container">
        <div class="row justify-content-between px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.svg" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.svg" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.svg" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.svg" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.svg" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities > > ></a>
            </div>
        </div>
    </div>

    <!-- Our Reviews form -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Reviews</h2>

    <div class="container">
        <div class="swiper swiper-testemonial">
            <div class="swiper-wrapper">
              <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-4">
                    <img src="images/features/star.svg" width="30px">
                    <h5 class="m-0 ms-2">Jean Gunnhildr</h5>
                </div>
                <p>
                BoardingHub provided a fantastic stay with clean, 
                spacious rooms and friendly staff,
                making the booking and management process seamless. 
                Highly recommended for a comfortable living experience."
               
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-4">
                    <img src="images/features/star.svg" width="30px">
                    <h5 class="m-0 ms-2">Diluc Ragnvindr </h5>
                </div>
                <p>
                BoardingHub was generally positive with decent rooms,
                but maintenance issues and slow staff response need improvement. 
                Overall, a good place with some room for enhancement.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                   
                </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-4">
                    <img src="images/features/star.svg" width="30px">
                    <h5 class="m-0 ms-2">Lisa Minci</h5>
                </div>
                <p>
                BoardingHub offered a pleasant stay with well-maintained facilities and helpful staff,
                despite a slight delay in booking confirmation. 
                Great value and recommended for a comfortable stay.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                </div>
            </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More > > ></a>
        </div>
    </div>

    <!-- Reach Us -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Reach Us</h2>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.914850528526!2d125.13251907321018!3d6.142139627481223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f79ecede2b860d%3A0x9c07f8225e462cf1!2sBlock%2003%20Rd%2C%20General%20Santos%20City%2C%20South%20Cotabato!5e0!3m2!1sen!2sph!4v1715803643852!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 rounded col-md-4">
                <div class="bg-white p-4 rounded md-4">
                    <h5>Call Us</h5>
                    <a href="Phone: +639514810354" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-phone-fill"></i> +639514810354
                        </span>
                    </a>
                    <br>
                    <a href="Phone: +639514810354" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-phone-fill"></i> +639514810354
                        </span>
                    </a>
                    <br>
                    <a href="Phone: +639514810354" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-phone-fill"></i> +639514810354
                        </span>
                    </a>
                </div>
                <div class="bg-white p-4 rounded md-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter"></i> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram"></i> Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-lg-4 p-4">
                <h3 class="h-font fw-bold fs-3 mb-2">Boarding Hub</h3>
                <p>
                    (Discription about the Boarding Hub)
                </p>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Links</h5>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a> <br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About Us</a> <br>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Follow Us</h5>
                <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                    <i class="bi bi-twitter"></i> Twitter
                </a> <br>
                <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                    <i class="bi bi-facebook"></i> Facebook
                </a> <br>
                <a href="#" class="d-inline-block text-dark text-decoration-none">
                    <i class="bi bi-instagram"></i> Instagram
                </a> <br>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script>
        var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        }
        });

        var swiper = new Swiper(".swiper-testemonial", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            320:{
                slidesPerView: 1,
            },
            640:{
                slidesPerView: 1,
            },
            768:{
                slidesPerView: 2,
            },            
            1024:{
                slidesPerView: 3,
            },
        }
        });
    </script>
</body>
</html>
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
    <title>Boarding Hub - Rooms</title>
    <?php require('inc/link.php') ?>

    <style>
        .pop:hover{
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>

</head>
<body class="bg-light">
    <?php require('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fa-bold h-font text-center"> Rooms </h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items- stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none mb-3">
                                    <label class="form-check-label" for="f2">Facilities two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none mb-3">
                                    <label class="form-check-label" for="f3">Facilities three</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none mb-3">
                                    <label class="form-check-label" for="f1">Facilities one</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Children</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-12 px-4">
            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/rooms/1.jpg" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Simple Room Name</h5>
                        <div class="features mb-3">
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
                        <div class="facilities mb-3 ">
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
                        <div class="guests mb-3">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                4 Children
                            </span>
                        </div>
                    </div>
                    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                    <div class="card-body">
                        <h6 class="mb-4">₱5k per month</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/rooms/1.jpg" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Simple Room Name</h5>
                        <div class="features mb-3">
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
                        <div class="facilities mb-3 ">
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
                        <div class="guests mb-3">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                4 Children
                            </span>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                    <div class="card-body">
                        <h6 class="mb-4">₱5k per month</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/rooms/1.jpg" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Simple Room Name</h5>
                        <div class="features mb-3">
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
                        <div class="facilities mb-3 ">
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
                        <div class="guests mb-3">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                4 Children
                            </span>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                    <div class="card-body">
                        <h6 class="mb-4">₱5k per month</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <?php require('inc/footer.php') ?>
</body>
</html>
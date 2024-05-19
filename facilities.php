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
    <title>Boarding Hub - Facilities</title>
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
        <h2 class="fa-bold h-font text-center"> Our Facilities</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nostrum autem nam fugiat, officiis alias, laudantium culpa 
            dolor hic facere saepe suscipit amet possimus vero quasi perspiciatis, 
            debitis est provident quos!
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                    <img src="images/features/wifi.svg" width="40px">
                    <h5 class="m-3">WiFi</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                         Autem consequuntur illum maxime excepturi, sunt rem ea nemo 
                         incidunt recusandae, ipsam minus iure velit reprehenderit 
                         voluptatem sed, temporibus neque facilis fuga?
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                    <img src="images/features/wifi.svg" width="40px">
                    <h5 class="m-3">WiFi</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                         Autem consequuntur illum maxime excepturi, sunt rem ea nemo 
                         incidunt recusandae, ipsam minus iure velit reprehenderit 
                         voluptatem sed, temporibus neque facilis fuga?
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                    <img src="images/features/wifi.svg" width="40px">
                    <h5 class="m-3">WiFi</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                         Autem consequuntur illum maxime excepturi, sunt rem ea nemo 
                         incidunt recusandae, ipsam minus iure velit reprehenderit 
                         voluptatem sed, temporibus neque facilis fuga?
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                    <img src="images/features/wifi.svg" width="40px">
                    <h5 class="m-3">WiFi</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                         Autem consequuntur illum maxime excepturi, sunt rem ea nemo 
                         incidunt recusandae, ipsam minus iure velit reprehenderit 
                         voluptatem sed, temporibus neque facilis fuga?
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                    <img src="images/features/wifi.svg" width="40px">
                    <h5 class="m-3">WiFi</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                         Autem consequuntur illum maxime excepturi, sunt rem ea nemo 
                         incidunt recusandae, ipsam minus iure velit reprehenderit 
                         voluptatem sed, temporibus neque facilis fuga?
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                    <img src="images/features/wifi.svg" width="40px">
                    <h5 class="m-3">WiFi</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                         Autem consequuntur illum maxime excepturi, sunt rem ea nemo 
                         incidunt recusandae, ipsam minus iure velit reprehenderit 
                         voluptatem sed, temporibus neque facilis fuga?
                    </p>
                </div>
            </div>

        </div>
    </div>
    
    <?php require('inc/footer.php') ?>
</body>
</html>
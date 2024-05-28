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
    <title>Boarding Hub - About Us</title>
    <?php require('inc/link.php') ?>

    <style>
        .pop:hover{
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }

        .box{
            border-top-color: var(--teal) !important;
        }
    </style>

</head>
<body class="bg-light">
    <?php require('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fa-bold h-font text-center"> About Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nostrum autem nam fugiat, officiis alias, laudantium culpa 
            dolor hic facere saepe suscipit amet possimus vero quasi perspiciatis, 
            debitis est provident quos!
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3"> Lorem ipson dolor sit</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quae rem officia dolorum commodi. Atque saepe accusamus 
                    earum obcaecati neque consequuntur eos, aliquam corrupti 
                    optio perferendis corporis repudiandae cupiditate delectus 
                    nesciunt.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1 ">
                <img src="images/about/about.jpg " class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ Rooms</h4>
                </div>
            </div>
        </div>
    </div>
    
    <?php require('inc/footer.php') ?>

</body>
</html>
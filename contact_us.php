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
    <title>Boarding Hub - Contact Us</title>
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
        <h2 class="fa-bold h-font text-center"> Contact Us</h2>
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
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.914850528526!2d125.13251907321018!3d6.142139627481223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f79ecede2b860d%3A0x9c07f8225e462cf1!2sBlock%2003%20Rd%2C%20General%20Santos%20City%2C%20South%20Cotabato!5e0!3m2!1sen!2sph!4v1715803643852!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/yjVWsWqGVwGnVTNPA" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt"></i> Block 03 Rd Block 03 Rd, General Santos City, South Cotabato 
                    </a>
                    <h5 class="mt-4">Call Us</h5>
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
                </div>
            </div>

        </div>
    </div>
    
    <?php require('inc/footer.php') ?>
</body>
</html>
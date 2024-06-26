<?php
include 'header.inc';
include 'nav.inc';
include 'db_connect.inc';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery - Hikes Victoria</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;700&family=Permanent+Marker&family=Ysabeau+SC:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="main.js" defer></script>
</head>
<body>
    <header>
        <nav>
            <a href="index.html">
                <img src="images/logo.png" alt="Hikes Victoria Logo">
            </a>
            <select name="menu" onchange="navigate(this.value)">
                <option value="#">Select an Option...</option>
                <option value="index.html">Home</option>
                <option value="hikes.html">Hikes</option>
                <option value="add.html">Add More</option>
                <option value="gallery.html" selected>Gallery</option>
            </select>
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <button type="submit"><span class="material-icons">search</span></button>
            </div>
        </nav>
    </header>

    <main>
        <div class ="toptext">
        <h3>Victoria has a lot to offer!</h3>
        <p>Whether seeking solace in solitude or the companionship of fellow hikers, Victoria's trails promise an unforgettable experience where the spirit of the land and the joy of hiking converge. <br>Are you ready to explore?</p>
        </div>
        <div class="gallery">
            <figure>
                <img src="images/werribee.jpg" alt="Werribee Gorge Circuit Walk">
                <figcaption>Werribee Gorge Circuit Walk</figcaption>
            </figure>
            <figure>
                <img src="images/capewoolamai.jpg" alt="Cliff, Woodland and Quarry Tracks">
                <figcaption>Cliff, Woodland and Quarry Tracks</figcaption>
            </figure>
            <figure>
                <img src="images/lyrebird.jpg" alt="Lyrebird Track">
                <figcaption>Lyrebird Track</figcaption>
            </figure>
            <figure>
                <img src="images/keppellookout.jpg" alt="Keppel Lookout Trail">
                <figcaption>Keppel Lookout Trail</figcaption>
            </figure>
            <figure>
                <img src="images/grampians.jpg" alt="The Pinnacle Walk & Lookout">
                <figcaption>The Pinnacle Walk & Lookout</figcaption>
            </figure>
            <figure>
                <img src="images/prom.jpg" alt="Millers Landing Nature Walk">
                <figcaption>Millers Landing Nature Walk</figcaption>
            </figure>
        </div>
        
    </main>

    <?php 
    include 'footer.inc'; 
    ?>
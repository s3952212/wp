<?php
include 'header.inc';
include 'nav.inc';
include 'db_connect.inc';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hikes in Victoria</title>
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
                <option value="hikes.html" selected>Hikes</option>
                <option value="add.html">Add More</option>
                <option value="gallery.html">Gallery</option>
            </select>
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <button type="submit"><span class="material-icons">search</span></button>
            </div>
        </nav>
    </header>

    <main>
        <h3>Discover Victoria your own way!</h3>
        <p>Nestled in the vibrant landscape of Victoria, Australia, hiking enthusiasts can discover a realm of diverse terrains and breathtaking vistas. From the rugged coastline of The Great Ocean Walk to the majestic peaks of the Grampians National Park, Victoria offers a mosaic of trails that cater to adventurers of all skill levels. Hikers can traverse through lush rainforests in The Otways, where the air is fresh and the sound of cascading waterfalls accompanies the rustle of ferns and towering eucalyptus trees. Each step reveals the state's natural splendor, whether it's the wildflowers blooming in the Alpine National Park or the dramatic rock formations dotting the landscape of the Mornington Peninsula.</p>
        <div class="container">
        <img src="images/falls.jpg" alt="Waterfalls" class="feature-image">
        <table class = "Table" >
            <tr>
                <th>Hike</th>
                <th>Distance</th>
                <th>Level</th>
                <th>Location</th>
            </tr>
            <tr>
                <td>Werribee Gorge Circuit Walk</td>
                <td>10 KM</td>
                <td>Moderate</td>
                <td>Meikles Point Picnic Area</td>
            </tr>
            <tr>
                <td>Cliff, Woodland and Quarry Tracks</td>
                <td>8.9 KM</td>
                <td>Moderate</td>
                <td>Cape Woolamai</td>
            </tr>
            <tr>
                <td>Lyrebird Track</td>
                <td>4.8 KM</td>
                <td>Easy</td>
                <td>Upper Ferntree Gully</td>
            </tr>
            <tr>
                <td>Keppel Lookout Trail</td>
                <td>11 KM</td>
                <td>Moderate</td>
                <td>Marysville</td>
            </tr>
            <tr>
                <td>The Pinnacle Walk & Lookout</td>
                <td>2.1 KM</td>
                <td>Easy</td>
                <td>Grampians</td>
            </tr>
            <tr>
                <td>Millers Landing Nature Walk</td>
                <td>4.3 KM</td>
                <td>Easy</td>
                <td>Wilsons Promontory</td>
            </tr>
        </table>
        </div>
    </main>

    <?php 
    include 'footer.inc'; 
    ?>
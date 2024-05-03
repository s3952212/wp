<?php
include 'header.inc'; 
include 'nav.inc';   
include 'db_connect.inc'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hikes Victoria</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;700&family=Permanent+Marker&family=Ysabeau+SC:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="main.js" defer></script>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">
                <img src="images/logo.png" alt="Hikes Victoria Logo">
            </a>
            <select name="menu" onchange="location = this.value;">
                <option value="#">Select an Option...</option>
                <option value="index.php">Home</option>
                <option value="hikes.php">Hikes</option>
                <option value="add.php">Add More</option>
                <option value="gallery.php">Gallery</option>
            </select>
            <div class="search-bar">
                <form action="search.php" method="get">
                    <input type="text" name="query" placeholder="Search">
                    <button type="submit"><span class="material-icons">search</span></button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div> 
                <h1>HIKES VICTORIA</h1>
                <h2>Welcome to Victoria</h2>
            </div>
            <img src="images/apostles.jpg" alt="Twelve Apostles" class="main-image">
        </div>
    </main>
    <?php 
    include 'footer.inc'; 
    ?>

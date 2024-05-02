<?php
include 'header.inc';
include 'nav.inc';
include 'db_connect.inc';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add a Hike - Hikes Victoria</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Exo:400,700|Permanent+Marker|Ysabeau+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="main.js" defer></script>
</head>
<body>
    <header>
        <!-- Navigation Code -->
    </header>
    <main>
        <h3>Add a Hike</h3>
        <form action="submit_hike.php" method="post" enctype="multipart/form-data">
            <label for="hike-name">Hike Name: *</label>
            <input type="text" id="hike-name" name="hike_name" required>

            <label for="description">Description: *</label>
            <textarea id="description" name="description" required></textarea>

            <label for="image">Select an Image: *</label>
            <input type="file" id="image" name="image" accept="image/*" required>

            <label for="image-caption">Image Caption: *</label>
            <input type="text" id="image-caption" name="image_caption" required>

            <label for="distance">Distance (km): *</label>
            <input type="number" id="distance" name="distance" required>

            <label for="location">Location: *</label>
            <input type="text" id="location" name="location" required>

            <label for="level">Level:</label>
            <select id="level" name="level" required>
                <option value="">Select Level</option>
                <option value="easy">Easy</option>
                <option value="moderate">Moderate</option>
                <option value="challenging">Challenging</option>
            </select>

            <button type="submit">Submit Hike</button>
            <button type="reset">Clear</button>
        </form>
    </main>
    <?php include 'footer.inc'; ?>
</body>
</html>

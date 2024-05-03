<?php
include 'header.inc';
include 'nav.inc';
include 'db_connect.inc';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hikeName = $_POST['hike_name'];
    $description = $_POST['description'];
    $imageCaption = $_POST['image_caption'];
    $distance = $_POST['distance'];
    $location = $_POST['location'];
    $level = $_POST['level'];
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $allowedTypes = ['jpg' => 'image/jpg', 'jpeg' => 'image/jpeg', 'png' => 'image/png'];
        $fileType = $_FILES['image']['type'];
        $fileName = $_FILES['image']['name'];
        $fileTmp = $_FILES['image']['tmp_name'];
        if (!array_key_exists(pathinfo($fileName, PATHINFO_EXTENSION), $allowedTypes)) {
            die('Error: Please upload a valid image type.');
        }
        $uploadPath = 'images/' . $fileName;
        if (!move_uploaded_file($fileTmp, $uploadPath)) {
            die('Error: File upload failed.');
        }
    } else {
        die('Error: ' . $_FILES['image']['error']);
    }

    $sql = "INSERT INTO hikes (hikename, description, image, caption, distance, location, level) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('MySQL prepare error: ' . $stmt->error);
    }

    $stmt->bind_param('ssssdss', $hikeName, $description, $fileName, $imageCaption, $distance, $location, $level);
    if ($stmt->execute()) {
        echo 'Hike added successfully!';
    } else {
        echo 'Error: ' . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
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

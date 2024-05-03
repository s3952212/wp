<?php
include 'db_connect.inc'; 

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $hikeId = $_GET['id'];


    $stmt = $conn->prepare("SELECT hikename, image, distance, level, location, description FROM hikes WHERE hikeid = ?");
    $stmt->bind_param("i", $hikeId);
    $stmt->execute();
    $stmt->bind_result($hikeName, $image, $distance, $level, $location, $description);
    $stmt->fetch();
    $stmt->close();
} else {
    echo "Invalid hike ID.";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($hikeName); ?> - Hikes Victoria</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Navigation Code Here -->
    </header>
    <main>
        <div class="hike-details">
            <div class="hike-image">
                <img src="images/<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($hikeName); ?>">
            </div>
            <div class="hike-info">
                <h1><?php echo htmlspecialchars($hikeName); ?></h1>
                <div class="hike-stats">
                    <span><i class="material-icons">directions_walk</i> <?php echo htmlspecialchars($distance); ?> KM</span>
                    <span><i class="material-icons">terrain</i> <?php echo htmlspecialchars($level); ?></span>
                    <span><i class="material-icons">place</i> <?php echo htmlspecialchars($location); ?></span>
                </div>
                <p><?php echo nl2br(htmlspecialchars($description)); ?></p>
            </div>
        </div>
    </main>
    <?php 
    include 'footer.inc'; 
    ?>
</body>
</html>
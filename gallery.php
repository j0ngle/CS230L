<?php
require 'includes/header.php';
require 'includes/dbhandler.php';
?>

<main>
<link rel="stylesheet" href="css/gallery.css">
<link href="css/reviews.css" rel="stylesheet">
    <h1>Movies</h1>
    <div class="gallery-container max-height:400">
        <?php
            $sql = "SELECT * FROM movieentry";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo 'SQL Failure';
            }
            else {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card">
                        <a href="review.php?id='.$row['id'].'">
                            <img src="images/gallery_images/'.$row["gallery_pic"].'" style="width:216px; height:320px">
                            <h3>'.$row["title"].'</h3>
                        </a>
                    </div>';
                }
            }
        ?>
    </div>
</main>
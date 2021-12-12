<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>galéria</title>
    <link rel="stylesheet" href="4-gallery.css" />
</head>

<body>
    <!-- title -->
    <?php
    top_header();
    ?>

    <!-- navbar -->
    <?php
    navbar();
    ?>

    <!-- main  -->
    <main class="main-content">
        <div class="main-content">
            <?php
            $directory = "../images";
            foreach (glob($directory . "/*.jpg") as $filename) {
                echo "<img src='$filename' alt='$filename' class='content-image' />";
            }
            ?>
        </div>
    </main>

    <!-- footer -->
    <?php
    footer();
    ?>
</body>
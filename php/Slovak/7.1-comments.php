<?php

include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST['comment'];
    if (empty($comment)) {
    } else {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $comment = $_POST['comment'];

        $data = $name . '|' . $surname . '|' . $comment;

        $file = fopen("comments.txt", "a");
        fwrite($file, $data . "\n");
        fclose($file);
    }
}

?>


<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>comments</title>
    <link rel="stylesheet" href="7.1-comments.css" />
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
    <main>

        <div class="back-button">
            <div class="together">
                <a href="./7-contacts.php" class="image-arrow">
                    <img src="../images/back.png" alt="back" />
                </a>
                <div class="main-text">STLÁČ TOTO TLAČIDLO NA NÁVRAT</div>
            </div>
        </div>
        <hr />

        <!-- form -->
        <form method="post" action="7.1-comments.php">
            Meno: <br />
            <input type="text" name="name" />
            <br />
            Priezvisko: <br />
            <input type="text" name="surname" />
            <br />
            <br />
            Text: <br />
            <textarea type="text" name="comment" cols="50" rows="10" maxlength="500"></textarea>
            <br />
            <br />
            <input type="submit">
        </form>

        <hr>
        <div class="comments-container">
            <div class="text">
                <?php
                $data = get_comments();
                if (count($data) > 1) {
                    for ($i = (count($data) - 1); $i >= 0; $i--) {
                        $rowArray = explode('|', $data[$i]);

                        print('<p>name:' . $rowArray[0] . '</p>');
                        print('<p>surname:' . $rowArray[1] . '</p>');
                        print('<p>comment:' . $rowArray[2] . '</p>');
                        print('<hr>');
                    }
                }
                ?>
                <hr>
            </div>
        </div>
    </main>

    <!-- footer -->
    <?php
    footer();
    ?>
</body>

</html>
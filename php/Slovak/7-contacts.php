<?php
include 'functions.php';

// put_comment('Tim', 'Retard', 'askndasidbopasidas dasasd');
// file_put_contents('comments.txt', "KURWA");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>kontakt</title>
    <link rel="stylesheet" href="7-contacts.css" />
</head>

<body>
    <?php
    top_header();
    ?>

    <!-- navbar -->
    <?php
    navbar();
    ?>

    <!-- main  -->
    <main>
        <h2 class="heading-1">
            V prípade, že ste našli nejaké nedostatky, stačí vyplniť formulár. V
            prípade, že chcete navštíviť hlavnu stránku výrobcu telefónu, kliknite
            na názov Huawei
        </h2>
        <div class="container">
            <article class="contact">
                <p>
                    Webstránka výrobcu telefónu:
                    <a class="link" href="https://www.huawei.com/en/">HUAWEI</a>
                </p>
            </article>
            <article class="contact">
                <p>
                    Tu si môžeš kúpiť telefón:
                    <a class="link" href="https://mobilne-telefony.heureka.sk/f:26540:28105671/?gclid=Cj0KCQiA-eeMBhCpARIsAAZfxZCxMBq5Wf_TxPobVn7k8MzUQv64FXXO3dGZLHT_qjGzuyGJ0kX3zaoaAstQEALw_wcB">HEUREKA</a>
                </p>
            </article>
        </div>
        <br>
        <section class="comments">
            <a href="./7.1-comments.php">KOMENTÁRE</a>
        </section>
    </main>

    <!-- footer -->
    <?php
    footer();
    ?>
</body>
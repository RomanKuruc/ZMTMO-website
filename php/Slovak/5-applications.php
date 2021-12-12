<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>aplikácia</title>
        <link rel="stylesheet" href="5-applications.css" />
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
    <main class="row main">
        <div class="column">
            <p class="text">
                V tejto sekcii je uvedený zoznam niektorých pred inštalovaných
                aplikácií. Nie je tu zoznam presne všetkých aplikácií, ktoré bude
                telefón obsahovať, preto som tu vypísal iba tie hlavné
            </p>
            <video width="200" autoplay controls>
                <source src="../images/videjko.mp4" type="video/mp4" />
            </video>
        </div>
        <div class="row-item">
            <details class="details">
                <summary class="informations">APLIKÁCIE OD GOOGLE</summary>
                <table class="table">
                    <tr>
                        <th scope="row">Google</th>
                    </tr>
                    <tr>
                        <th scope="row">Gmail</th>
                    </tr>
                    <tr>
                        <th scope="row">Mapy</th>
                    </tr>
                    <tr>
                        <th scope="row">Youtube</th>
                    </tr>
                    <tr>
                        <th scope="row">Disk</th>
                    </tr>
                    <tr>
                        <th scope="row">Fotky</th>
                    </tr>
                    <tr>
                        <th scope="row">Filmy Google Play</th>
                    </tr>
                    <tr>
                        <th scope="row">Obchod Play</th>
                    </tr>
                </table>
            </details>
            <details class="details">
                <summary class="informations">NÁSTROJE</summary>
                <table class="table">
                    <tr>
                        <th scope="row">Počasie</th>
                    </tr>
                    <tr>
                        <th scope="row">Kalkulačka</th>
                    </tr>
                    <tr>
                        <th scope="row">Záznam zvuku</th>
                    </tr>
                    <tr>
                        <th scope="row">Rádio</th>
                    </tr>
                    <tr>
                        <th scope="row">Zrkadlo</th>
                    </tr>
                    <tr>
                        <th scope="row">Kompas</th>
                    </tr>
                    <tr>
                        <th scope="row">Phone Clone</th>
                    </tr>
                    <tr>
                        <th scope="row">Orange menu</th>
                    </tr>
                </table>
            </details>
            <details class="details">
                <summary class="informations">APLIKÁCIE HUAWEI</summary>
                <table class="table">
                    <tr>
                        <th scope="row">Knihy</th>
                    </tr>
                    <tr>
                        <th scope="row">Link now</th>
                    </tr>
                    <tr>
                        <th scope="row">Centrum členov</th>
                    </tr>
                    <tr>
                        <th scope="row">Mapy Petal</th>
                    </tr>
                </table>
            </details>
            <details class="details">
                <summary class="informations">INÉ</summary>
                <table class="table">
                    <tr>
                        <th scope="row">e-mail</th>
                    </tr>
                    <tr>
                        <th scope="row">hudba</th>
                    </tr>
                    <tr>
                        <th scope="row">video</th>
                    </tr>
                    <tr>
                        <th scope="row">AppGallery</th>
                    </tr>
                    <tr>
                        <th scope="row">Zdravie</th>
                    </tr>
                    <tr>
                        <th scope="row">booking.com</th>
                    </tr>
                    <tr>
                        <th scope="row">Tipy</th>
                    </tr>
                    <tr>
                        <th scope="row">Orange TV</th>
                    </tr>
                </table>
            </details>
            <details class="details">
                <summary class="informations">MOJE APLIKÁCIE</summary>
                <table class="table">
                    <tr>
                        <th scope="row">Facebook</th>
                    </tr>
                    <tr>
                        <th scope="row">Instagram</th>
                    </tr>
                    <tr>
                        <th scope="row">Discord</th>
                    </tr>
                    <tr>
                        <th scope="row">Spotify</th>
                    </tr>
                    <tr>
                        <th scope="row">Messenger</th>
                    </tr>
                    <tr>
                        <th scope="row">Waze</th>
                    </tr>
                    <tr>
                        <th scope="row">Cestovný poriadok</th>
                    </tr>
                    <tr>
                        <th scope="row">Twitch</th>
                    </tr>
                    <tr>
                        <th scope="row">Bolt</th>
                    </tr>
                    <tr>
                        <th scope="row">Steam</th>
                    </tr>
                    <tr>
                        <th scope="row">Netflix</th>
                    </tr>
                    <tr>
                        <th scope="row">Photomath</th>
                    </tr>
                </table>
            </details>
        </div>
    </main>

    <!-- footer -->
    <?php
    footer();
    ?>
</body>
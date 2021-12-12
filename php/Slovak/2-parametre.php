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
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>parametre</title>
    <link rel="stylesheet" href="2-parametre.css" />
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


    <main class="main container">
        <p class="text">
            v tejto časti stránky nájdete všetky parametre telefónu v tabuľkovom
            zozname
        </p>
        <div class="row main">
            <img class="picture" src="../images/parameters.png" alt="parameters" />
            <div class="row-item">
                <details class="details">
                    <summary class="informations">Základné informácie</summary>
                    <table class="table">
                        <tr>
                            <th scope="row">Výška</th>
                            <td>71,36mm</td>
                        </tr>
                        <tr>
                            <th scope="row">šírka</th>
                            <td>149,1mm</td>
                        </tr>
                        <tr>
                            <th scope="row">hrúbka</th>
                            <td>7,57mm</td>
                        </tr>
                        <tr>
                            <th scope="row">hmotnosť</th>
                            <td>165g</td>
                        </tr>
                        <tr>
                            <th scope="row">veľkosť displeja</th>
                            <td>6,15''</td>
                        </tr>
                        <tr>
                            <th scope="row">typ displeja</th>
                            <td>TFT LCD</td>
                        </tr>
                        <tr>
                            <th scope="row">Rozlíšenie</th>
                            <td>FHD 2 312 x 1 080 pixelov</td>
                        </tr>
                        <tr>
                            <th scope="row">Ochrana voči vode, prachu...</th>
                            <td>nepodporuje</td>
                        </tr>
                        <tr>
                            <th scope="row">Pamäť.</th>
                            <td>4GB RAM + 128GB ROM</td>
                        </tr>
                        <tr>
                            <th scope="row">Procesor</th>
                            <td>Kirin 710</td>
                        </tr>
                    </table>
                </details>
                <details class="details">
                    <summary class="informations">Pripojenie</summary>
                    <table class="table">
                        <tr>
                            <th scope="row">WLAN</th>
                            <td>Podporované</td>
                        </tr>
                        <tr>
                            <th scope="row">headset jack</th>
                            <td>3,5mm</td>
                        </tr>
                        <tr>
                            <th scope="row">bluetooth</th>
                            <td>BT4.2, BLE, aptX, HWA</td>
                        </tr>
                        <tr>
                            <th scope="row">nabíjací port</th>
                            <td>Type-C, USB 2.0</td>
                        </tr>
                    </table>
                </details>
                <details class="details">
                    <summary class="informations">Fotoaparát</summary>
                    <table class="table">
                        <tr>
                            <th scope="row">Zadný fotoaparát</th>
                            <td>48 Mpx</td>
                        </tr>
                        <tr>
                            <th scope="row">režím priblíženia</th>
                            <td>digital zoom</td>
                        </tr>
                        <tr>
                            <th scope="row">rozlíšenie fotografie</th>
                            <td>8000x1600 pixelov</td>
                        </tr>
                        <tr>
                            <th scope="row">rozlíšenie videa</th>
                            <td>1920x1080 pixelov</td>
                        </tr>
                        <tr>
                            <th scope="row">predný fotoaparát</th>
                            <td>24 Mpx</td>
                        </tr>
                        <tr>
                            <th scope="row">rozlíšenie fotografie</th>
                            <td>5632x4224 pixelov</td>
                        </tr>
                        <tr>
                            <th scope="row">rozlíšenie videa</th>
                            <td>1920x1080 pixelov</td>
                        </tr>
                    </table>
                </details>
                <details class="details">
                    <summary class="informations">Batéria</summary>
                    <table class="table">
                        <tr>
                            <th scope="row">Typ batérie</th>
                            <td>Lithium polymer</td>
                        </tr>
                        <tr>
                            <th scope="row">Výmena batérie</th>
                            <td>Nepodporované</td>
                        </tr>
                        <tr>
                            <th scope="row">Štandardná nabíjačka</th>
                            <td>9V / 2A nabíjačka</td>
                        </tr>
                        <tr>
                            <th scope="row">čas nabíjania</th>
                            <td>~105 minút</td>
                        </tr>
                    </table>
                </details>
                <details class="details">
                    <summary class="informations">Lokalizačné služby</summary>
                    <table class="table">
                        <tr>
                            <th scope="row">GPS</th>
                            <td>Podporované</td>
                        </tr>
                        <tr>
                            <th scope="row">GLONASS</th>
                            <td>Podporované</td>
                        </tr>
                        <tr>
                            <th scope="row">BieDou</th>
                            <td>Podporované</td>
                        </tr>
                        <tr>
                            <th scope="row">AGPS</th>
                            <td>Podporované</td>
                        </tr>
                        <tr>
                            <th scope="row">Navigačný software</th>
                            <td>
                                nie je predišntalovaný, podporuje navigáciu tretích stran
                            </td>
                        </tr>
                    </table>
                </details>
                <details class="details">
                    <summary class="informations">Senzory</summary>
                    <table class="table">
                        <tr>
                            <th scope="row">Gravitačný snímač</th>
                            <td>Podporované</td>
                        </tr>
                        <tr>
                            <th scope="row">snímač okolitého svetla</th>
                            <td>Podporované</td>
                        </tr>
                        <tr>
                            <th scope="row">snímač priblíženia</th>
                            <td>Podporované</td>
                        </tr>
                        <tr>
                            <th scope="row">gyroskop</th>
                            <td>Podporované</td>
                        </tr>
                        <tr>
                            <th scope="row">kompas</th>
                            <td>Podporované</td>
                        </tr>
                        <tr>
                            <th scope="row">snímač odtlačku prsta</th>
                            <td>podporované</td>
                        </tr>
                    </table>
                </details>
            </div>
        </div>
    </main>

    <!-- footer -->
    <?php
    footer();
    ?>
</body>
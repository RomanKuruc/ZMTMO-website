<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Domovská stránka</title>
    <link rel="stylesheet" href="1-home.css" />
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
    <main class="main container">
        <div class="column">
            <img src="../images/p30lite.png" alt="fotka mobilu" class="img" />
        </div>
        <div class="column">
            <p class="text">
                Vitajte na mojej webovej stránke mobilného telefónu Huawei P30 lite.
                Táto stránka slúži ako recenzčná stránka. Tu nájdete všetky kompletné
                informácie ako sú napríklad parametre telefónu, fotky, moja recenzia,
                ale dokonca aj hodnotenie iných používateľov. V prípade, že chcete
                zanechať svoju vlastnú recenziu na telefón, stačí kliknúť na sekciu
                "POUŽÍVATEĽSKÉ HODNOTENIE", prípadne ak nájdete nejaké nedostatky,
                stačí napísať do sekcie KONTAKT.
            </p>
        </div>
    </main>

    <!-- footer -->
    <?php
    footer();
    ?>
</body>

</html>
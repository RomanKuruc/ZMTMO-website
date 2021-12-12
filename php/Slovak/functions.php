<?php

//    NAVBAR    //
function navbar()
{
    print('<header class="header">
    <a class="<?php echo ($page == "1-home.php" ? "active" : "") ?>
        <a href="1-home.php" class="header-item">DOMOVSKA STRANKA</a>
    </a>
    <a class="<?php echo ($page == "2-parametre.php" ? "active" : "") ?>
        <a href="2-parametre.php" class="header-item">PARAMETRE</a>
    </a>
    <a class="<?php echo ($page == "3-experience.php" ? "active" : "") ?>
        <a href="3-experience.php" class="header-item">SKÚSENOSŤ</a>
    </a>
    <a class="<?php echo ($page == "4-gallery.php" ? "active" : "") ?>
        <a href="4-gallery.php" class="header-item">GALÉRIA</a>
    </a>
    <a class="<?php echo ($page == "5-applications.php" ? "active" : "") ?>
        <a href="5-applications.php" class="header-item">APLIKÁCIE</a>
    </a>
    <a class="<?php echo ($page == "6-users-review.php" ? "active" : "") ?>
        <a href="6-users-review.php" class="header-item">POUŽÍVATEĽSKÉ HODNOTENIA</a>
    </a>
    <a class="<?php echo ($page == "7-contacts.php" ? "active" : "") ?>
        <a href="7-contacts.php" class="header-item">KONTAKT</a>
    </a>
</header>
    ');
}

//    HEADER    //
function top_header()
{
    print('
    <div class="top">
        <div>
            <img src="../images/Logo 100x100 pixel.png" alt="spectacular logo" class="logo rotate" />
        </div>
        <h1 class="title">Huawei P30 lite</h1>
        <div class="language">
            <a class="header-item header-item--selected" href="../English/EN 1-home.html">EN</a>
        </div>
    </div>');
}

//    footer    //
function footer()
{
    print('
    <footer class="footer">
        <a href="https://github.com/RomanKuruc" class="github">Vytvoril Roman Kuruc</a>
        <div class="row">
            <a href="https://www.facebook.com/huawei/" class="social-media-button">
                <img src="../images/facebook.svg" alt="facebook" class="image" />
            </a>
            <a href="https://www.instagram.com/huaweimobile/" class="social-media-button">
                <img src="../images/instagram.png" alt="instagram" class="image" />
            </a>
            <a href="https://twitter.com/Huawei/" class="social-media-button">
                <img src="../images/twitter.png" alt="twitter" class="image" />
            </a>
        </div>
    </footer>');
}


//    COMMENTS    //
function get_comments()
{
    $fileRead = file('comments.txt');
    return $fileRead;
}

function put_comment($name, $surname, $comment)
{
    print_r('put comments');
    $fileRead = file('comments.txt');
    file_put_contents($fileRead, $name . '|' . $surname . '|' . $comment);
}

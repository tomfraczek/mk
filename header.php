<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Myriam Kemmar - PPC Consultant</title>

    <link rel="shortcut icon" type="image/png" href="./assets/mk.ico"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/css/uikit.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit.min.js"></script>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>

<div class="container">
    <div class="nav">
        <div class="nav-logo">
            <span class="nav-logo--name">myriam kemmar</span>
            <span class="nav-logo--company">ppc consultant</span>
        </div>

        <ul class="nav-menu">
            <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">home</a></li>
            <li class="<?= ($activePage == 'ppc-ads') ? 'active':''; ?>"><a href="ppc-ads.php">ppc ads</a></li>
            <li class="<?= ($activePage == 'display-ads') ? 'active':''; ?>"><a href="display-ads.php">display ads</a></li>
            <li class="<?= ($activePage == 'marketing-solutions') ? 'active':''; ?>"><a href="marketing-solutions.php">marketing solutions</a></li>
            <li class="<?= ($activePage == 'free-consultation') ? 'active':''; ?>"><a href="free-consultation.php">free consultation</a></li>
            <li class="nav-menu__contact-me_desk"><a class="btn btn-orange" href="contact-me.php">contact me</a></li>
        </ul>

        <label class="hamburger">
            <input class="hamburger-input" type="checkbox" />
            <svg id="icon" width="192px" height="192px" viewBox="0 16 32 32">
                <g class="icon">
                    <g class="debug">
                        <path class="top" d="
          M 96, 0
          L 72,24
          C 68,28 60,32 56,32
          L 40,32
          C 36,32 28,24 24,24
          L  0,24
        "></path>
                        <path class="middle" d="
          M 56,32
          L  0,32
        "></path>
                        <path class="bottom" d="
          M 96,64
          L 72,40
          C 68,36 60,32 56,32
          L 40,32
          C 36,32 28,40 24,40
          L  0,40
        "></path>
                    </g>
                    <path class="top" d="
        M 96, 0
        L 72,24
        C 68,28 60,32 56,32
        L 40,32
        C 36,32 28,24 24,24
        L  0,24
      "></path>
                    <path class="middle" d="
        M 56,32
        L  0,32
      "></path>
                    <path class="bottom" d="
        M 96,64
        L 72,40
        C 68,36 60,32 56,32
        L 40,32
        C 36,32 28,40 24,40
        L  0,40
      "></path>
                </g>
                <defs>
                    <filter id="gooey">
                        <feGaussianBlur
                                in="SourceGraphic"
                                result="blur"
                                stdDeviation="3"
                        />
                        <feColorMatrix
                                in="blur"
                                mode="matrix"
                                values="
            1 0 0 0 0
            0 1 0 0 0
            0 0 1 0 0
            0 0 0 18 -7
          "
                                result="gooey"
                        />
                        <feBlend
                                in2="gooey"
                                in="SourceGraphic"
                                result="mix"
                        />
                    </filter>
                </defs>
            </svg>
        </label>

    </div>

    <ul class="nav-menu-mobile" id="menuMobile">
        <li><a href="/">home</a></li>
        <li><a href="ppc-ads.php">ppc ads</a></li>
        <li><a href="display-ads.php">display ads</a></li>
        <li><a href="marketing-solutions.php">marketing solutions</a></li>
        <li><a href="free-consultation.php">free consultation</a></li>
        <li class="nav-menu__contact-me"><a href="contact-me.php">contact me</a></li>
    </ul>

</div>

<script>

    document.getElementById('icon').addEventListener('click', function () {
        document.getElementById('menuMobile').classList.toggle('nav-open');
    })
</script>
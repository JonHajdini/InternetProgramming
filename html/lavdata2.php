<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Lavdata 2</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/body.css" type="text/css">
    <link rel="stylesheet" href="../css/lavdatat.css" type="text/css">
    <link rel="stylesheet" href="../css/footeri.css" type="text/css">
    <link rel="stylesheet" href="../css/dropdown.css" type="text/css">
    <script src="https://kit.fontawesome.com/af9a262f2e.js" crossorigin="anonymous"></script>
</head>

<body>
<button id="back-to-top-btn"><i class="fa fa-chevron-circle-up"></i></button>

<div class="wrapper">
    <div class="wrapper row1">
        <header id="header" class="clear">
            <div id="hgroup">
                <h1><a href="../index.php">AUTONOMOUS</a></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="../index.php">HOME</a></li>
                    <li><a href="Sherbimet.php">SHERBIMET</a></li>
                    <li><a href="#kontakti">KONTAKTONI</a></li>
                    <li><a href="Kontakti.php">REZERVO</a></li>
                    <li><a href="#">FUN</a>
                        <ul>
                            <li><a href="Chooselanguage.php">LANGUAGE</a></li>
                            <li><a href="game.php">GAME</a></li>
                        </ul>
                    </li>
                    <li><a href="portfolio.php">OFERTA</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
    </div>

    <div class="wrapper col3" >
        <div id="container" style="background-image: linear-gradient(to bottom right , rgba(198, 233, 159, 0), rgb(231, 233, 143));">
            <h1 style="font-size: 40px; text-align: center; color: blueviolet;">Lavdatat nga konsumatoret tane</h1>
            <div class="testimonial push50 clear">
                <img src="../images/profile-pic.png" style="float:left; padding: 20px; width:200px; height:200px;"
                     alt="">
                <div class="three_quarter">
                    <blockquote>
                        <p style="font-size: 24px;">
                        <p>Dita e Parë: Nisja nga Prishtina 08.00 me autobus për në Aeroportin e Shkupit. Pushime

                        </p>
                    </blockquote>
                    </br>
                    <?php
                    //printf Function

                    $cmimi ="120$";
                    print ("Nje cmim i arsyeshem per nje nate qe kushton $cmimi");
                    echo '<br/>';
                    $PriceArray=array ('price'=>"120$",'qty'=>"7");
                    printf("Kurse cmimi qe qendruam per 7 nete ishte  $%d",($PriceArray['price']*$PriceArray['qty']));
                    ?>
                    </br>
                    <?php
                    $stre="Mrekullueshem !!";

                    echo $stre. "<br>";
                    echo trim($stre,"!");
                    ?>

                    <br />

                    <p>

                        Vlera e jashtëzakonshme për para - e vendosur në zemër të Tryavna, fillimisht duket se po hyni në një shtëpi të vjetër, por
                        brenda çdo gjëje është e mobiluar dhe paraqitur moderne. Dhomat ishin të pastra dhe të rehatshme, kishte një lidhje të fortë
                        wi-fi.

                    </p>

                </div>
            </div>
            <p style="text-align: center; padding: 20px 0;"><iframe width="760px" height="430"
                                                                    src="https://www.youtube.com/embed/IbmrqYjyBnU" frameborder="0" allowfullscreen></iframe></p>
            <div class="testimonial clear">
                <img src="../images/profile-pic.png"
                     style=" float:right;  width:200px; height:200px; padding: 20px;" alt="">
                <div class="three_quarter">
                    <blockquote>
                        <p style="font-size: 24px;">
                            <?php
                            //substr and strl
                            // Positive numbers:
                            echo substr("***********************************************************", 1) . "<br>";
                            echo substr("Aty Ju do te gjeni rehati !", 3) . "<br>";
                            echo "<br>";
                            ?>
                        <p>
                            Ngjyra, diell, tapas, det, art. Nëse mbyllim sytë dhe mendojme për Barcelonën, këto janë
                            elementet
                            që do ju vijne në mendje. Barcelona është ajo që ne e quajme qytet i përsosur: ajo ka
                            një klimë ideale,
                            njerëzit janë të ngrohtë dhe, sigurisht që nuk mund të neglizhojme, pranine e plazhit
                            dhe detit. Per ata
                            që po planifikojnë të shpenzojnë vetëm një fundjavë, kemi 10 këshilla se çfarë të bëni
                            dhe ku të shkoni
                            dhe shpresojme se do të jenë të dobishme për ju!
                        </p>
                        </br>
                        <?php
                        //trim
                        $stre = "My best regards !";
                        echo trim($stre,"My");
                        ?>


                        <?php

                        //str_replace
                        echo "<br>";
                        echo "<br>";
                        echo str_replace("world","Written","world by : ");
                        echo str_replace('old', 'new', 'John Doe');
                        ?>

                        <address >
                            Visit us at:<br>
                            Jolilu.com<br>
                            FIEK, Prishtine<br>
                            KOSOVE
                        </address>
                        </br>
                    </blockquote>
                </div>
            </div>

            <div style="padding-bottom: 20px;">
                <img src="../images/profile-pic.png" style="float:right; padding: 20px; width:200px; height:200px;"
                     alt="">
                <img src="../images/profile-pic.png" style=" padding: 20px; width:200px; height:200px;" alt="">
                <img src="../images/profile-pic.png" style=" padding: 20px; width:200px; height:200px;" alt="">
                <img src="../images/profile-pic.png" style="float:left; padding: 20px; width:200px; height:200px;"
                     alt="">
            </div>

            <div style="padding-left: 40px; padding-bottom: 30px;"><span style="color:#0d0d53;"><span
                            style="font-size: 18px;">
                            <p>Klikoni butonin per ta formatuar numrin '13.3714' me 'toPrecision(5)' </p>

                            <button onclick="myFunction()">Formatoje</button>

                            <p id="demo"></p>

                            <script>
                                function myFunction() {
                                    var num1 = 13.3714;

                                    document.getElementById("demo").innerHTML = num1.toPrecision(5);

                                }
                            </script>
            </div>

            <div style="padding-left: 40px; padding-bottom: 30px;"><span style="color:#0d0d53;"><span
                            style="font-size: 18px;">
                    <p>Numri 1000000 ne formatin e 'currency Euro' me "de-DE" metoda 'toLocaleString'. </p>

                    <script>
                        var n = new Number(1000000);
                        var myObj = {
                            style: "currency",
                            currency: "EUR"
                        }

                        document.write(n.toLocaleString("de-DE", myObj));
                    </script>
            </div>

            <div class="icons" style="margin-top: -60px;">
                <a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a>
                <a href="https://www.pinterest.com/" target="_blank" class="fab fa-pinterest"></a>
                <a href="https://www.linkedin.com/" target="_blank" class="fab fa-linkedin"></a>
                <a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a>
                <a href="https://plus.google.com/discover" target="_blank" class="fab fa-google"></a>
            </div>
        </div>

    </div>


    <footer>
        <div class="footer-main">
            <div class="footer-inner">
                <div class="footer-left">
                    <div class="footer-box">

                        <h6>ABOUT US</h6>
                        <img src="../images/372.jpg" width="215px" height="90px" />


                        <p> JOLILU travel është një udhëzues gjithëpërfshirës për destinacionet
                            më të mira të udhëtimit në botë.Ne ofrojmë përmbajtje të detajuar
                            dhe të saktë të udhëtimit, të dizajnuara për të frymëzuar udhëtarët globalë.</p>
                        <a style="float: left" href="Sherbimet.php">Read more &raquo</a>
                    </div>
                </div>
                <div class="footer-left">
                    <div class="footer-box">
                        <h6>LINK BLOCK</h6>
                        <ul>
                            <li style="border-bottom: 1px solid #919090"><a href="https://aria-travel.com/"
                                                                            target="_blank">&raquo
                                    AriaTravelAlbania</a>
                            </li>
                            <li style="border-bottom: 1px solid #919090"><a href="https://travel.com/"
                                                                            target="_blank">&raquo
                                    Travel</a>
                            </li>
                            <li style="border-bottom: 1px solid #919090"><a href="https://www.flyfrontier.com/"
                                                                            target="_blank">&raquo
                                    FlyFrontier</a>
                            </li>
                            <li style="border-bottom: 1px solid #919090"><a
                                        href="https://www.skyscanner.co.in/airlines-all.php" target="_blank">&raquo
                                    AirlineInformation</a>
                            </li>
                            <li style="border-bottom: 1px solid #919090"><a href="https://www.expedia.com/Flights"
                                                                            target="_blank">&raquo
                                    CheapFlights</a>
                            </li>
                            <li style="border-bottom: 1px solid #919090"><a href="https://www.flyksa.com/Fr/"
                                                                            target="_blank">&raquo
                                    KosovaAirline</a>
                            </li>
                            <li style="border-bottom: 1px solid #919090"><a href="https://wizzair.com/en-gb"
                                                                            target="_blank">&raquo
                                    Wizzair</a>
                            </li>
                            <li style="border-bottom: 1px solid #919090"><a
                                        href="https://www.booking.com/index.en.php?aid=1725925;label=en-hc-s4glC*wNOeGEZ7B_fjY56gS336411372683:pl:ta:p1:p2:ac:ap1t1:neg:fi:tikwd-29738972:lp9070165:li:dec:dm;ws=&gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyLVGbHhMLxOMak9qpd0ujKJ9cfnMF8B3yjazKJZ-lNSBOCK3-zLs8gaAuC-EALw_wcB"
                                        target="_blank">&raquo
                                    Hotels and More</a>
                            </li>
                            <li style="border-bottom: 1px solid #919090"><a href="../README.md"
                                                                            target="_blank">&raquo Readme</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-left">
                    <div class="footer-box">
                        <h6>ME TE REJAT</h6>

                        <h4>Dubai - 6 ditë - €629</h4>

                        <p>Dita e Parë: Nisja me Autobus nga Prishtina në Aeroportin e Dubait.It was popularised in
                            the 1960s with
                            the release of </p>
                        <a style="float: left" href="lavdatat.php">Read more &raquo</a>
                        <br>


                        <div class="latestb">
                            <h4>Dubai - 6 ditë - €629</h4>

                            <p>Dita e Parë: Nisja me Autobus nga Prishtina në Aeroportin e Shkupit . It was
                                popularised in the 1960s
                                with the release otaining</p>
                            <a style="float: left" href="lavdata3.php">Read more &raquo</a>
                            <br>
                            <br>

                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-left">
                <div class="footer-box">
                    <h6 id="kontakti">CONTACT US</h6>
                    <form id="contact-form" method="post" action="" autocomplete="on">
                        <input type="text" id="name" name="name" placeholder="Name" class="required">
                        <input type="text" id="email" name="email" placeholder="Email" class="required">
                        <textarea name="message" placeholder="Message" rows="6" class="required"></textarea><br>
                        <input type="submit" name="SUBMIT" value="SUBMIT">
                    </form>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </footer>

</div>


</div>

<script src="../js/backtotop.js"></script>
<script src="../js/rregullat.js"></script>

</body>

</html>
<?php include "db.php" ?>

<html>

<head>
  <title>Portfolio</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <link rel="stylesheet" href="../css/dropdown.css" type="text/css">
  <link rel="stylesheet" href="../css/footeri.css" type="text/css">
  <link rel="stylesheet" href="../css/portfolio.css" type="text/css">
  <script src="https://kit.fontawesome.com/af9a262f2e.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="wrapper" style="background-image: url(../images/globi.png), url(../images/bota.png); background-repeat: no-repeat;background-size: 200px 200px; background-position: top 250px left 10px, bottom 600px right 10px; background-attachment: scroll; ">
    <button id="back-to-top-btn"><i class="fa fa-chevron-circle-up"></i></button>
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
            <li><a href="portfolio.php" class="active">OFERTA</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </header>
    </div>

    <?php
    // I merr te gjitha te dhenat nga tabela ofertat
    $query = "SELECT * FROM ofertat";
    $select_all_ofertat_query = mysqli_query($connection, $query);

    // Me while loop e mbush tere faqen me te dhenat e marra nga databaza
    while($row = mysqli_fetch_assoc($select_all_ofertat_query)) {

      // Ruaj te dhenat e fushave ne variabla te reja
      $oferta_id = $row['oferta_id']; // 'oferta_id' eshte emri i kolones ne tabelen ofertat
      $emri_oferta = $row['emri_oferta'];
      $foto_oferta = $row['foto_oferta'];

    ?>


    <div class="wrapper col3" >
      <div id="container" class="clear">
        <h1 style="text-align: center; color:steelblue; font-size: 30px; padding-top: 35px;"><strong> Oferta <?php echo $oferta_id ?></strong></h1>
        <section id="portfolio" class="clear">
          <ul>
            <li>
              <article>
                <figure><a href="<?php echo $emri_oferta; ?>.php"><img src="../images/<?php echo $foto_oferta; ?>" alt=""></a>
                  <figcaption><strong> <?php echo ucfirst($emri_oferta); ?> </strong></figcaption>
                </figure>
              </article>
            </li>
            <!-- <li>
              <article>
                <figure><a href="stamboll.php"><img src="../images/stamboll.jpg" alt=""></a>
                  <figcaption><strong>Stambolli</strong></figcaption>
                </figure>
              </article>
            </li>
            <li>
              <article>
                <figure><a href="doha.php"><img src="../images/doha.jpg" alt=""></a>
                  <figcaption><strong>Doha</strong></figcaption>
                </figure>
              </article>
            </li>
            <li>
              <article>
                <figure><a href="Amsterdam.php"><img src="../images/amsterdam.jpg" alt=""></a>
                  <figcaption>Amsterdam</figcaption>
                </figure>
              </article>
            </li>
            <li>
              <article>
                <figure><a href="Barcelona.php"><img src="../images/barcelona.jpg" alt=""></a>
                  <figcaption>Barcelona</figcaption>
                </figure>
              </article>
            </li>
            <li>
              <article>
                <figure><a href="Paris.php"><img src="../images/paris.jpg" alt=""></a>
                  <figcaption><strong>Parisi</strong></figcaption>
                </figure>
              </article>
            </li> -->

            <div class="icons">
              <a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a>
              <a href="https://www.pinterest.com/" target="_blank" class="fab fa-pinterest"></a>
              <a href="https://www.linkedin.com/" target="_blank" class="fab fa-linkedin"></a>
              <a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a>
              <a href="https://plus.google.com/discover" target="_blank" class="fab fa-google"></a>
            </div>
      </div>
    </div>
    <?php }?>

    <!-- Thirre file 'footer.php', ku eshte i ruajtur footer-i -->
    <?php include "footer.php" ?>
    
    <!-- <footer>
      <div class="footer-main">
        <div class="footer-inner">
          <div class="footer-left">
            <div class="footer-box">

              <h6>ABOUT US</h6>
              <img src="../images/372.jpg" width="215px" height="90px" />


              <p>JOLILU travel është një udhëzues gjithëpërfshirës për destinacionet
                më të mira të udhëtimit në botë.Ne ofrojmë përmbajtje të detajuar
                dhe të saktë të udhëtimit, të dizajnuara për të frymëzuar udhëtarët globalë.</p>
              <a style="float: left" href="Sherbimet.php">Read more &raquo</a>
            </div>
          </div>
          <div class="footer-left">
            <div class="footer-box">
              <h6>LINK BLOCK</h6>
              <ul>
                <li style="border-bottom: 1px solid #919090"><a href="https://aria-travel.com/" target="_blank">&raquo
                    AriaTravelAlbania</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a href="https://travel.com/" target="_blank">&raquo
                    Travel</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a href="https://www.flyfrontier.com/"
                    target="_blank">&raquo
                    FlyFrontier</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a href="https://www.skyscanner.co.in/airlines-all.php"
                    target="_blank">&raquo AirlineInformation</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a href="https://www.expedia.com/Flights"
                    target="_blank">&raquo
                    CheapFlights</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a href="https://www.flyksa.com/Fr/" target="_blank">&raquo
                    KosovaAirline</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a href="https://wizzair.com/en-gb" target="_blank">&raquo
                    Wizzair</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a
                    href="https://www.booking.com/index.en.php?aid=1725925;label=en-hc-s4glC*wNOeGEZ7B_fjY56gS336411372683:pl:ta:p1:p2:ac:ap1t1:neg:fi:tikwd-29738972:lp9070165:li:dec:dm;ws=&gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyLVGbHhMLxOMak9qpd0ujKJ9cfnMF8B3yjazKJZ-lNSBOCK3-zLs8gaAuC-EALw_wcB"
                    target="_blank">&raquo
                    Hotels and More</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a href="../README.md" target="_blank">&raquo Readme</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-left">
            <div class="footer-box">
              <h6>ME TE REJAT</h6>

              <h4>Dubai - 6 ditë - €629</h4>

              <p>Dita e Parë: Nisja me Autobus nga Prishtina në Aeroportin e Dubait.It was popularised in the 1960s with
                the release of </p>
              <a style="float: left" href="lavdatat.php">Read more &raquo</a>
              <br>


              <div class="latestb">
                <h4>Dubai - 6 ditë - €629</h4>

                <p>Dita e Parë: Nisja me Autobus nga Prishtina në Aeroportin e Shkupit . It was popularised in the 1960s
                  with the release otaining</p>
                <a style="float: left" href="lavdata2.php">Read more &raquo</a>
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
    </footer> -->
  </div>
  <script src="../js/backtotop.js"></script>
  <script src="../js/rregullat.js"></script>

</body>

</html>
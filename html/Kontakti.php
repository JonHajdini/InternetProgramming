<?php
  if(filter_has_var)(INPUT_POST, 'submit'){
    $firstname = $_POST['emri'];
    $lastname = $_POST['mbiemri'];
    $gjinia = $_POST['gender'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $birthday = $_POST['birthday'];
    $nisja = $_POST['nisja'];
  }
?>
<?php

/*  ---- Indexed array ---- */
$name = array("HOME", "SHERBIMET", "KONTAKTONI", "FUN");
$arrlength = count($name);

for($x = 0; $x < $arrlength; $x++) 
{

    if($name[$x] == "HOME")
    {
        continue;
    }
}
/* ------------------------- */

/* --- Associative arrays --- */

$assoArray = array("Agency" => "JOLILU", "Contact" => "CONTACT US");

/* -------------------------- */

/* --- Multidimensional arrays --- */
$contact = array
(
    array("Number: ",0101404101),
    array("Address: ","Julian Park st.101"),
    array("City: ", "Prishtine"),
);

for ($row = 0; $row < 3; $row++)
{
    for ($col = 0; $col < 2; $col++)
    {
        //echo "\n".$contact[$row][$col]."\n";
    }

}

/* ------------------------------------- */

/* --- Sorting Arrays --- */
$numbers = array(5, 24, -3, 11, 6);
rsort($numbers);  // descending order

/* ---- Manual sorting(Manupilimi me vargje) ---- */
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++)
{
    for ($y = $x + 1; $y < $arrlength; $y++)
    {
        if($numbers[$x] < $numbers[$y])
        {
            $tempValue = $numbers[$y];
            $numbers[$y] = $numbers[$x];
            $numbers[$x] = $tempValue;
            // ascending order
        }
    }
}
/* --------------------------------------------- */

/* ---- Sorting associatove arrays --- */
$costumers = "Costumers: ";
$age = array("John" => "20", "Paul" => "31", "Angela" => "22");
$Aarrsorted = asort($age); // Ascending order according to the value(age)
$Darrsorted = krsort($age); // Descending order according to the key(Name)
/* ---------------------------------------------- */


?>
<!DOCTYPE html>
<html>
<?php 

?>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Rezervo</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <link rel="stylesheet" href="../css/body.css" type="text/css">
  <link rel="stylesheet" href="../css/footeri.css" type="text/css">
  <link rel="stylesheet" href="../css/dropdown.css" type="text/css">
  <link rel="stylesheet" href="../css/Kontakti.css" type="text/css">
  <script src="https://kit.fontawesome.com/af9a262f2e.js" crossorigin="anonymous"></script>
  <script src="../js/jquery.min.js"></script>

  <!--JQuery events per ndryshim te backgroundit te ndonjeres prej formave-->
  <script>
    $(document).ready(function () {
      $("input").focus(function () {
        $(this).css("background-color", "yellow");
      });
      $("input").blur(function () {
        $(this).css("background-color", "#F08080");
      });
    });
  </script>

</head>

<body>
  <button id="back-to-top-btn"><i class="fa fa-chevron-circle-up"></i></button>
  <div class="wrapper">
    <div class="wrapper row1">
      <header id="header" class="clear">
        <div id="hgroup">
          <h1><a href="../index.html">AUTONOMOUS</a></h1>
        </div>
        <nav>
          <ul>
            <li><a href="../index.html"></a></li>
            <li><a href="Sherbimet.html"><?php echo $name[1] ?></a></li>
            <li><a href="#kontakti"><?php echo $name[2] ?></a></li>
            <li><a href="Kontakti.html" class="active">REZERVO</a></li>
            <li><a href="#"><?php echo $name[3] ?></a>
              <ul>
                <li><a href="Chooselanguage.html">LANGUAGE</a></li>
                <li><a href="game.html">GAME</a></li>
              </ul>
            </li>
            <li><a href="portfolio.html">OFERTA</a></li>
            <li><a href="gallery.html">GALLERY</a></li>

          </ul>
        </nav>
        <div class="clear"></div>
      </header>
    </div>
    <div class="wrapper col3">
      <div id="container" class="clear">

        <form id="contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="on">
          <h3>Rezervo</h3>
          <h4>Jepni te dhenat e meposhtme</h4>
          <fieldset>
            <input placeholder="Your firstname" type="text" name="emri" tabindex="1" required autofocus>
            <input placeholder="Your lastname" type="text" name="mbiemri" tabindex="1" required>
          </fieldset>
          <fieldset>
            Gjinia: &nbsp;&nbsp;
            <input type="radio" name="gender" value="male" checked> Male &nbsp;
            <input type="radio" name="gender" value="female"> Female &nbsp;
            <input type="radio" name="gender" value="other"> Other
          </fieldset>
          <fieldset>
            <input placeholder="Your Email Address" type="email" name="email"
              pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Ju lutem shenojeni emailin ne formatin e duhur"
              tabindex="2" required>
          </fieldset>
          <fieldset>
            <input placeholder="Your Phone Number" type="tel" name="tel" tabindex="3" pattern="[0-9]{9}" required>
          </fieldset>
          <fieldset>
            Birthday: <input type="date" tabindex="4" name ="birthday" required>

          </fieldset>
          <fieldset>
            Nisja nga: <input list="nisja" name="nis" tabindex="5" required>
            <datalist id="nisja">
              <option value="Prishtina">
              <option value="Shkupi">
              <option value="Tirana">
            </datalist>

            &nbsp;&nbsp;&nbsp;&nbsp;
            N&euml;: <input list="ne" name="vendi" tabindex="6" required>
            <datalist id="ne">
              <option value="Dubai">
              <option value="Stambolli">
              <option value="Daho">
              <option value="Barcelona">
              <option value="Paris">
              <option value="Amsterdam">
            </datalist>
          </fieldset>

          <fieldset>
            <input placeholder="Shenoni regjionin ose hotelin" type="text" name="hotel" tabindex="7">
          </fieldset>
          <fieldset>
            Net&euml;: <input type="number" name="nata" min="1" max="8" required>&nbsp;&nbsp;&nbsp;&nbsp;
            Numri i dhomave: <input type="number" name="dhoma" min="0" max="3">&nbsp;&nbsp;&nbsp;&nbsp;
            Numri i f&euml;mij&euml;ve: <input type="number" name="femija" min="0" max="4" required>
          </fieldset>
          <fieldset>
            Data e nisjes: <input type="date" tabindex="8" name="nisja" required>
          </fieldset>
          <fieldset>
            Udhetimi: <br />
            <input type="checkbox" name="udhetimi" value="aeroplan"> Aeroplan<br />
            <input type="checkbox" name="udhetimi" value="autobus"> Autobus<br />
            <input type="checkbox" name="udhetimi" value="anije"> Anije
          </fieldset>
          <fieldset>
            <textarea placeholder="Type your message here...." tabindex="9"></textarea>
          </fieldset>
          <fieldset>
            <h4><span style="color:blue">Gjeni lokacionin tuaj. Shtyp butonin </span></h4>

            <button onclick="getLocation()"> Lokacioni im </button>

            <p id="demo"><br /></p>

            <script>
              var x = document.getElementById("demo");

              function getLocation() {
                if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                  x.innerHTML = "Geolocation is not supported by this browser.";
                }
              }

              function showPosition(position) {
                x.innerHTML = "<br /> Latitude:" + position.coords.latitude +
                  "<br>Longitude: " + position.coords.longitude;
              }
            </script>

          </fieldset>
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
          </fieldset>
        </form>
        <div class="icons">
          <a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a>
          <a href="https://www.pinterest.com/" target="_blank" class="fab fa-pinterest"></a>
          <a href="https://www.linkedin.com/" target="_blank" class="fab fa-linkedin"></a>
          <a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a>
          <a href="https://plus.google.com/discover" target="_blank" class="fab fa-google"></a>
        </div>
      </div>
    </div>
    </header>



    <footer>
      <div class="footer-main">
        <div class="footer-inner">
          <div class="footer-left">
            <div class="footer-box">

              <h6>ABOUT US</h6>
              <img src="../images/372.jpg" width="215px" height="90px" />


              <p> <?php echo $assoArray['Agency']?> travel është një udhëzues gjithëpërfshirës për destinacionet
                më të mira të udhëtimit në botë.Ne ofrojmë përmbajtje të detajuar
                dhe të saktë të udhëtimit, të dizajnuara për të frymëzuar udhëtarët globalë.</p>
              <a style="float: left" href="Sherbimet.html">Read more &raquo</a>
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
                <li style="border-bottom: 1px solid #919090"><a href="https://www.skyscanner.co.in/airlines-all.html"
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
                    href="https://www.booking.com/index.en.html?aid=1725925;label=en-hc-s4glC*wNOeGEZ7B_fjY56gS336411372683:pl:ta:p1:p2:ac:ap1t1:neg:fi:tikwd-29738972:lp9070165:li:dec:dm;ws=&gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyLVGbHhMLxOMak9qpd0ujKJ9cfnMF8B3yjazKJZ-lNSBOCK3-zLs8gaAuC-EALw_wcB"
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
              <a style="float: left" href="lavdatat.html">Read more &raquo</a>
              <br>


              <div class="latestb">
                <h4>Dubai - 6 ditë - €629</h4>

                <p>Dita e Parë: Nisja me Autobus nga Prishtina në Aeroportin e Shkupit . It was popularised in the 1960s
                  with the release otaining</p>
                <a style="float: left" href="lavdata2.html">Read more &raquo</a>
                <br>
                <br>

              </div>
            </div>
          </div>
        </div>
        <div class="footer-left">
          <div class="footer-box">
            <h6 id="kontakti"><?php echo $assoArray['Contact']?></h6>
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

  <script src="../js/backtotop.js"></script>
  <script src="../js/rregullat.js"></script>



</body>

</html>
<?php
  if(filter_has_var(INPUT_POST, 'submit')){
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

/* *OOP in PHP* */
/*-----------------------------------------------------------------*/
// Sort indexed or Associative Arrays
class SortedArrays
{
    public $IndexedArray;
    public $AssociativeArray;


    public function set_numbers($IndexedArray)                                  // set indexed array
    {
        $this->numbers = $IndexedArray;
    }
    public function set_people($AssociativeArray)                               // set associative array
    {
        $this->people = $AssociativeArray;
    }
    /* gets constructed and setted members */
    public function get_numbers()
    {
        return $this->numbers;
    }
    public function get_people()
    {
        return $this->people;
    }

    /* ------------------------------------- */
}


$indarrays = array(5, 24, -3, 11, 6);
$assarrays = array("John" => "20", "Paul" => "31", "Angela" => "22");

$sortoVargjet = new SortedArrays();                       // declare new object from class
$sortoVargjet -> set_numbers($indarrays);                 // set indexed array  in object
$sortoVargjet -> set_people($assarrays);                  // set associative array in object
$numbers = $sortoVargjet->get_numbers();                  // gets indexed array from class
$people = $sortoVargjet->get_people();                    // gets associative array from class


$sort = rsort($numbers);                           // gets descending order of indexed array from class
$Aarrsorted = asort($people);                      // Ascending order according to the value(age)
$Darrsorted = krsort($people);                     // Descending order according to the key(Name)


// manual sorting (Manupilimi me vargje)                  // manual sorting of indexed array
for($x = 0; $x < count($numbers); $x++)
{
    for ($y = $x + 1; $y < count($numbers); $y++)
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



/* ------------------------------------------------------------------------- */

// PHP OOP - Inheritance //
class Vargjet extends SortedArrays
{
    public $MulDimArray;


    function __construct($IndexedArray, $AssociativeArray, $MulDimArray)
    {
        $this->indexed = $IndexedArray;
        $this->associative = $AssociativeArray;
        $this->multidimensional = $MulDimArray;
        $this->length = count($IndexedArray);
    }

    /*      get constructed variables       */
    function get_indexed()
    {
        return $this->indexed;
    }
    function get_associative()
    {
        return $this->associative;
    }
    function get_length()
    {
        return $this->length;
    }
    function get_multidimensional()
    {
        return $this->multidimensional;
    }
    /* ------------------------------------ */
    //--------- Destruct object ------------//
    function __destruct()
    {
        //echo "Klasa u prish!";
    }
}


$indArray = array("HOME", "SHERBIMET", "KONTAKTONI", "FUN");             //  indexed array

$assoArray = array("Agency" => "JOLILU", "Contact" => "CONTACT US");     //  associative array

$mulArray = array                                                        // multidimensional array
(
    array("Number: ",0101404101),
    array("Address: ","Julian Park st.101"),
    array("City: ", "Prishtine"),
);


$vargjet = new Vargjet($indArray, $assoArray, $mulArray);               // construct object
$name =  $vargjet->get_indexed();                                       // declare indexed array from class
$arrlength = $vargjet->get_length();                                    // declare length of indexed array from class
$agency = $vargjet->get_associative();                                  // declare associative array from class
$contact = $vargjet->get_multidimensional();                            // declare multidimensional array from class

// basic loop
for($x = 0; $x < $arrlength; $x++)
{

    if($name[$x] == "HOME")
    {
        continue;
    }
}

// echo out multidimensional array
for ($row = 0; $row < 3; $row++)
{
    for ($col = 0; $col < 2; $col++)
    {
        // echo "\n".$contact[$row][$col]."\n";
    }

}
?>
<!DOCTYPE html>
<html>
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
<!--  <script>
    $(document).ready(function () {
      $("input").focus(function () {
        $(this).css("background-color", "yellow");
      });
      $("input").blur(function () {
        $(this).css("background-color", "#F08080");
      });
    });
  </script>-->

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
            <li><a href="../index.php"><?php echo $name[0] ?></a></li>
            <li><a href="Sherbimet.php"><?php echo $name[1] ?></a></li>
            <li><a href="#kontakti"><?php echo $name[2] ?></a></li>
            <li><a href="Kontakti.php" class="active">REZERVO</a></li>
            <li><a href="#"><?php echo $name[3] ?></a>
              <ul>
               
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



      <?php

      include "footer.php";

      ?>
  </div>

  <script src="../js/backtotop.js"></script>
  <script src="../js/rregullat.js"></script>



</body>

</html>
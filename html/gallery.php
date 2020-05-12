<?php

if(isset($_POST['submit'])){

 $emri = $_POST['name'];

 echo "Faleminderit " . $emri; 
 echo "Mesazhi i juaj u pranua me sukses";

}

?>

<html>

<head>
  <title>Gallery</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <link rel="stylesheet" href="../css/dropdown.css" type="text/css">
  <link rel="stylesheet" href="../css/footeri.css" type="text/css">
  <link rel="stylesheet" href="../css/gallery.css" type="text/css">
  <script src="https://kit.fontawesome.com/af9a262f2e.js" crossorigin="anonymous"></script>
  <script src="../js/jquery.min.js"></script>

  <!--jQuery Get()-->
  <script>
    $(document).ready(function () {
      $("#butoni2").click(function () {
        alert("HTML Head Kodi: " + $("head").php());
      });
    });
  </script>
  <script>

    //JQuery qe mundeson sliderin
    $(document).ready(function () {
      $("#butoni1").click(function () {
        $(".one_quarter").slideToggle();
      });
    });
  </script>
  <!--JQuery qe mundeson "Fade to" te imazhave-->
  <!--<script>
    $(document).ready(function () {
      $("#img1").click(function () {
        $("#img1").fadeTo(1000, 0.7);
      }),
        $("#img2").click(function () {
          $("#img2").fadeTo(1000, 0.7);
        }),
        $("#img3").click(function () {
          $("#img3").fadeTo(1000, 0.7);
        }),
        $("#img4").click(function () {
          $("#img4").fadeTo(1000, 0.7);
        }),
        $("#img5").click(function () {
          $("#img5").fadeTo(1000, 0.7);
        }),
        $("#img6").click(function () {
          $("#img6").fadeTo(1000, 0.7);
        }),
        $("#img7").click(function () {
          $("#img7").fadeTo(1000, 0.7);
        }),
        $("#img8").click(function () {
          $("#img8").fadeTo(1000, 0.7);
        }),
        $("#img9").click(function () {
          $("#img9").fadeTo(1000, 0.7);
        }),
        $("#img10").click(function () {
          $("#img10").fadeTo(1000, 0.7);
        }),
        $("#img11").click(function () {
          $("#img11").fadeTo(1000, 0.7);
        });
    });
  </script>-->

  <style>
    .heading {
      font-size: 22px;
      font-family: Georgia, "Times New Roman", Times, serif;
      color: darkblue;
      font-style: italic;
      text-decoration: underline;
      text-align: center;
      padding-left: 20px;
      padding-top: 10px;

    }

    .description {
      font-size: 22px;
      font-family: Georgia, "Times New Roman", Times, serif;
      color: darkblue;
      font-style: bold;
      padding-left: 0px;
      padding-bottom: 40px;

    }

    .description #highlight {
      text-shadow: 10px 10px 2px gray;
    }

    #highlight {
      background-color: #fff2ac;
      background-image: linear-gradient(to right, #ffe359 0%, #fff2ac 100%);
    }
  </style>
  <!--JQuery qe mundeson indertimin e nje teksti-->
  <script>
    $(document).ready(function () {
      $("#butoni6").click(function () {
        $("img").before("<b>Figure e bukur</b>");
      });

      $("#butoni5").click(function () {
        $("img").after("<i>Figure e bukur</i>");
      });
    });
  </script>


  <!--jQuery qe mundeson heqjen e ndonje elemnti-->
  <script>
    $(document).ready(function () {
      $("#butoni4").click(function () {
        $("#img3").remove();
      });
    });
  </script>

  <!--JQuery set() qe mundeson ndryshimin e atributit-->
  <script>
    $(document).ready(function () {
      $("button").click(function () {
        $("#hrefvalue").attr("href", "https://gmail.com");
      });
    });
  </script>

  <!--JQuery qe mundeson Drag and drop, pjesa e dyte e JQueryt e zhvendosur ne body-->
  <script>
    function allowDrop(ev) {
      ev.preventDefault();
    }

    function drag(ev) {
      ev.dataTransfer.setData("text", ev.target.id);
    }


  </script>
</head>

<body>
  <script>
    function drop(ev) {
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      ev.target.appendChild(document.getElementById(data));
    }
  </script>
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
               
                <li><a href="game.php">GAME</a></li>
              </ul>
            </li>
            <li><a href="portfolio.php">OFERTA</a></li>
            <li><a href="gallery.php" class="active">GALLERY</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </header>
    </div>
    <div class="wrapper col3">

      <div id="gallery">
        <figure>
          <h1 style="text-align: center; color:steelblue; font-size: 30px; padding-top: 35px;"><strong>Disa foto
              fantastike</strong></h1>
        <!--  <button id="butoni1"
            style="background-color:lightblue; border: 1px solid black; padding: 2px 2px 2px 2px; margin-right: 20px;">Slide</button>
          <button id="butoni2"
            style="background-color:lightblue; border: 1px solid black; padding: 2px 2px 2px 2px; margin-right: 20px;">Shfaq
            Html Kodin per Head Section</button>
          <button id="butoni3"
            style="background-color:lightblue; border: 1px solid black; padding: 2px 2px 2px 2px; margin-right: 20px;">Ndrysho
            href linkun
            tek G+!!</button>
          <button id="butoni4"
            style="background-color:lightblue; border: 1px solid black; padding: 2px 2px 2px 2px; ">Heqe foton e trete!
          </button>-->
          <ul class="nospace clear">
            <li class="one_quarter first"><a target="_blank"><img id="img1" src="../images/f1.jpg" width="210" height="210"
                  alt=""></a>
            </li>
            <li class="one_quarter"><a  target="_blank"><img id="img2" src="../images/f2.jpg" width="210" height="210"
                  alt=""></a></li>
            <li class="one_quarter"><a  target="_blank"><img id="img3" src="../images/f3.jpg" width="210" height="210"
                  alt=""></a></li>
            <li class="one_quarter"><a  target="_blank"><img id="img4" src="../images/f4.jpg" width="210" height="210"
                  alt=""></a></li>
            <li class="one_quarter first"><a  target="_blank"><img id="img5" src="../images/f5.jpg" width="210" height="210"
                  alt=""></a>
            </li>
            <li class="one_quarter"><a  target="_blank"><img id="img6" src="../images/f6.jpg" width="210" height="210"
                  alt=""></a></li>
            <li class="one_quarter"><a  target="_blank"><img id="img7" src="../images/italy.jpg" width="210" height="210"
                  alt=""></a></li>
            <li class="one_quarter"><a  target="_blank"><img id="img8" src="../images/dubai.jpg" width="210" height="210"
                  alt="Imazhi nuk mund te shfaqet"></a></li>
            <li class="one_quarter first"><a  target="_blank"><img id="img9" src="../images/f12.jpg" width="210" height="210"
                    alt=""></a>      
            <li class="one_quarter"><a  target="_blank"><img id="img6" src="../images/ushqim2.jpg" width="210" height="210"
                    alt=""></a></li>
            <li class="one_quarter"><a target="_blank"><img id="img7" src="../images/ushqim1.jpg" width="210" height="210"
                    alt=""></a></li>
            <li class="one_quarter"><a  target="_blank"><img id="img8" src="../images/barca.jpg" width="210" height="210"
                    alt="barca"></a></li>
            <li class="one_quarter first"><a  target="_blank"><img id="img9" src="../images/f7.jpg" width="210" height="210"
                  alt=""></a>
            </li>
            <li class="one_quarter"><a target="_blank"><img id="img10" src="../images/f8.jpg" width="210" height="210"
                  alt=""></a></li>
            <li style="border: 1px solid black; width:210px; height:210px;
            display:inline-block; margin:6px; float: left;" ondrop="drop(event)" ondragover="allowDrop(event)">
              <a href="#"><abbr title="Fotojo qe mund te zhvendoset">
                  <img id="img11" src="../images/f9.jpg" width="210" height="210" id="drag1" src="img_logo.gif"
                    draggable="true" ondragstart="drag(event)" alt="">
                </abbr></a></li>
            <li style="border: 0.2px solid black; width:210px; height:210px;
             display:inline-block; margin:6px; float: left;" ondrop="drop(event)" ondragover="allowDrop(event)"><a
                href="#"></a></li>

          </ul>
        </figure>
        <div class="description"><span id="highlight"><abbr style="border: none;text-decoration: none;" title="Gallery description">Gallery D.</abbr></span>
          <div class="icons">
            <a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a>
            <a href="https://www.pinterest.com/" target="_blank" class="fab fa-pinterest"></a>
            <a href="https://www.linkedin.com/" target="_blank" class="fab fa-linkedin"></a>
            <a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a>
              <a id="hrefvalue" href="https://plus.google.com/discover" target="_blank"
                class="fab fa-google"></a>
          </div>
        </div>

      </div>
    </div>
      <?php

      include "footer.php";

      ?>
  </div>

  <script src="../js/backtotop.js"></script>
  <script src="../js/rregullat.js"></script>

</body>

</html>
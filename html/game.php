<html>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Homepage</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <link rel="stylesheet" href="../css/body.css" type="text/css">
  <link rel="stylesheet" href="../css/game.css" type="text/css">
  <link rel="stylesheet" href="../css/footeri.css" type="text/css">
  <link rel="stylesheet" href="../css/dropdown.css" type="text/css">
  <script src="https://kit.fontawesome.com/af9a262f2e.js" crossorigin="anonymous"></script>

</head>

<body>

  <div class="wrapper" style="background-color: #FDEDEC;" >
    <div class="wrapper row1">
      <header id="header" class="clear">
        <div id="hgroup">
          <h1><a href="../index.html">AUTONOMOUS</a></h1>
        </div>
        <nav>
          <ul>
            <li><a href="../index.html">HOME</a></li>
            <li><a href="Sherbimet.html">Sherbimet</a></li>
            <li><a href="#kontakti">KONTAKTONI</a></li>
            <li><a href="Kontakti.html">REZERVO</a></li>
            <li><a href="#">FUN</a>
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
    <div class="wrapper col3" style="background-image: radial-gradient( rgb(71, 185, 219) , rgb(187, 187, 186));">

      
      <div id="game1" >
        <h1 id="snake">You are playing Snake Game. Good Luck!</h1>
        <canvas width="400" height="400" id="game"></canvas>

        <div id="score1">Score: <span id="score"></span></div>
        
      </div>

      <p style="font-size: 16px; color: rgb(173, 42, 42); margin-left:20px; padding-bottom: 10px;">Llogarit sa kohe po shpenzon: <output id="result" ></output>
      <button onclick="startWorker()">Fillo </button>
      <button onclick="stopWorker()">Ndalo</button> </p>

      
      <script>
        var w;

        function startWorker() {
          if (typeof (Worker) !== "undefined") {
            if (typeof (w) == "undefined") {
              w = new Worker("../js/timeCounter.js");
            }
            w.onmessage = function (event) {
              document.getElementById("result").innerHTML = event.data;
            };
          } else {
            document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Workers...";
          }
        }

        function stopWorker() {
          w.terminate();
          w = undefined;
        }
      </script>
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
              <h6>FROM THE BLOG</h6>
              <h4>Dubai - 6 ditë - €629</h4>

              <p>Dita e Parë: Nisja me Autobus nga Prishtina në Aeroportin e..
                <a style="float: left" href="lavdatat.html">Read more &raquo</a>
                <br>
                <br>

                <div class="latestb">
                  <h4>Datat e Nisjeve</h4>
                  <p>Datat e nisjeve – Me poshte gjeni cmimet per cdo date nisjeje:
                    ► 21, dhe 28 Gusht</p>
                  <a style="float: left" href="lavdata2.html">Read more &raquo</a>
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
  </div>
  </footer>
  </div>

  <script src="../js/game.js"></script>
  <script src="../js/rregullat.js"></script>

</body>

</html>
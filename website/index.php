<!doctype html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Koop een raceauto</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    <div id="header">
      <?php
$winkelnaam = "Koop een raceauto";
$aantalAutos = 6;
?>
<h1><?php echo $winkelnaam; ?></h1>
<p>We hebben <?php echo $aantalAutos; ?> auto's in de winkel.</p>
    </div>

    <div id="producten">
      <!-- Ligier LMP3 -->
      <div class="product-kaart">
        <h3>Ligier LMP3</h3>
        <a href="lmp3detail.html">
          <img src="images/lmp3.jpg" alt="Ligier LMP3" />
        </a>
        <h5>&euro; 300.000,00</h5>
        <p>
          LMP3 (Le Mans Prototype 3) is de instapklasse voor gesloten-cockpit
          sportscar-enduranceracen.
        </p>
      </div>

      <!-- Porsche GT4 -->
      <div class="product-kaart">
        <h3>Porsche 911 GT4 R</h3>
        <a href="gt4detail.html">
          <img src="images/porsche_gt4.jpg" alt="Porsche GT4" />
        </a>
        <h5>&euro; 300.000,00</h5>
        <p>
          De Porsche 911 GT4 R is een geweldige en toegankelijke raceauto voor de
          autosport.
        </p>
      </div>

      <!-- Oreca LMP2 -->
      <div class="product-kaart">
        <h3>Oreca LMP2</h3>
        <a href="lmp2detail.html">
          <img src="images/lmp2.webp" alt="Oreca LMP2" />
        </a>
        <h5>&euro; 500.000,00</h5>
        <p>
          De LMP2 auto is de tweede auto in de LMP (Le Mans Prototype) klasse na
          de LMP1.
        </p>
      </div>

      <!-- Porsche GT3 -->
      <div class="product-kaart">
        <h3>Porsche 911 GT3 R</h3>
        <a href="gt3detail.html">
          <img src="images/porsche_gt3.jpg" alt="Porsche GT3" />
        </a>
        <h5>&euro; 600.000,00</h5>
        <p>
          De Porsche 911 GT3 R is een populaire klantensport-raceauto voor diverse
          kampioenschappen.
        </p>
      </div>

      <!-- Porsche 963 LMDh -->
      <div class="product-kaart">
        <h3>Porsche 963 LMDh</h3>
        <a href="hypercardetail.html">
          <img src="images/porsche_hypercar.jpg" alt="Porsche 963 LMDh" />
        </a>
        <h5>&euro; 3.000.000,00</h5>
        <p>
          De Porsche Hypercar is een van de meest succesvolle Hypercar auto's op
          de wereld.
        </p>
      </div>

      <!-- Porsche Mission R -->
      <div class="product-kaart">
        <h3>Porsche Mission R</h3>
        <a href="missionrdetail.html">
          <img src="images/missionr.jpg" alt="Porsche Mission R" />
        </a>
        <h5>&euro; 10.000.000,00</h5>
        <p>
          De Porsche Mission R is een volledig elektrische conceptraceauto van
          Porsche.
        </p>
      </div>
    </div>

    <div id="footer">&copy; <?php echo date("Y"); ?> Koop een raceauto</div>
  </body>
</html>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="veld">
    <label for="voornaam">Voornaam</label>
    <input type="text" id="voornaam" name="voornaam" placeholder="Bijvoorbeeld: Sanne" required>
</div>

<div class="veld">
    <label for="achternaam">Achternaam</label>
    <input type="text" id="achternaam" name="achternaam" required>
</div>

<div class="veld">
    <label for="email">E-mailadres</label>
    <input type="email" id="email" name="email" required>
</div>

<div class="veld">
    <label for="aantal">Aantal</label>
    <input type="number" id="aantal" name="aantal" min="1" max="10" value="1" required>
</div>

<div class="veld">
    <input type="checkbox" id="voorwaarden" name="voorwaarden" required>
    <label for="voorwaarden">Ik ga akkoord met de voorwaarden</label>
</div>

<input type="submit" value="Bestelling plaatsen" class="knop">
</body>
</html>
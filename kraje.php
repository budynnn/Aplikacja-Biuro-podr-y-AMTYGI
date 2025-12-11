<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kraje</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>

<header>
    <h1><img src="logo_bezowe.png"> AMTYGI - Biuro podróży</h1>
    <a href="kraje.php" target="_self">Kraje</a>
    <a href="fiszki.php" target="_self">Fiszki</a>
    <a href="kontakt.php" target="_self">Kontakt</a>
    <a href="index.php" target="_self" id="sigma">Wyloguj</a>
</header>

<main>
<?php
$polaczenie = mysqli_connect("localhost", "root", "", "kraje");

$zapytanie = "SELECT nazwa, opis, czas_lotu, zdjecie FROM kraje";
$wynik = mysqli_query($polaczenie, $zapytanie);

while($wiersz = mysqli_fetch_array($wynik)) {

    echo "
    <div>
        <a class='kraj'
           href='".$wiersz['nazwa'].".php'
           style=\"background-image:url('".$wiersz['zdjecie']."')\">
            ".$wiersz['nazwa']."
        </a>

        <div class='info'>
            <p>".$wiersz['opis']."</p>
            <p><strong>Czas lotu:</strong> ".$wiersz['czas_lotu']."</p>
        </div>
    </div>
    ";
}

mysqli_close($polaczenie);
?>
</main>

<footer>

</footer>
</body>
</html>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kraje do wyboru</title>
    <link href="styles.css" rel="stylesheet">


</head>
<body>

<header>
    <h1><img src="logo_bezowe.png"> AMTYGI - Biuro podróży</h1>    
<!-- <a href="#" target="_self"></a>
    <a href="#" target="_self"></a> -->
    <a href="#" target="_self">Kraje</a>
    <a href="#" target="_self">Fiszki</a>
    <a href="#" target="_self">Kontakt</a>
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
        <div class='kraj' style=\"background-image:url('".$wiersz['zdjecie']."')\">
            ".$wiersz['nazwa']."
        </div>

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

<script>
    const kraje = document.querySelectorAll(".kraj");

    kraje.forEach((krajEl) => {
        krajEl.addEventListener("click", () => {
            const info = krajEl.nextElementSibling;

            if (info.style.display === "block") {
                info.style.display = "none";
            } else {
                info.style.display = "block";
            }
        });
    });
</script>

<footer>
    
</footer>
</body>
</html>

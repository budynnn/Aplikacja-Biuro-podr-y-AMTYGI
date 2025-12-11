<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kraje do wyboru</title>
    <link href="styles_kontakt.css" rel="stylesheet">


</head>
<body>

<header>
    <h1><img src="logo_bezowe.png"> AMTYGI - Biuro podróży</h1>    
<!-- <a href="#" target="_self"></a>
    <a href="#" target="_self"></a> -->
    <a href="kraje.php" target="_self">Kraje</a>
    <a href="fiszki.php" target="_self">Fiszki</a>
    <a href="kontakt.php" target="_self">Kontakt</a>
    <a href="index.php" target="_self" id="sigma">Wyloguj</a>
</header>

<main>
<!-- <?php
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
?> -->
</main>

<!-- <script>
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
</script> -->

<section class="kontakt">
    <h2>Skontaktuj się z nami!</h2>

    <div class="kontakt-grid">

        <div class="kontakt-box">
            <div class="ikonka">
               
                <svg width="40" height="40" fill="white" viewBox="0 0 24 24">
                    <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V21a1 1 0 01-1 1C10.07 22 2 13.93 2 3a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.46.57 3.58a1 1 0 01-.24 1.01l-2.2 2.2z"/>
                </svg>
            </div>
            <p>604 563 305 (Adam)<br>
               666 369 609 (Tymon)<br>
               728 141 152 (Igor)</p>
        </div>

        <div class="kontakt-box">
            <div class="ikonka">
               
                <svg width="40" height="40" fill="white" viewBox="0 0 24 24">
                    <path d="M2 4a2 2 0 012-2h16a2 2 0 012 2v16a2 2 0 01-2 2H4a2 2 0 01-2-2V4zm18 0H4v.01L12 11l8-6.99V4zm0 3.21l-7.55 5.24a1 1 0 01-1.1 0L4 7.21V20h16V7.21z"/>
                </svg>
            </div>
            <p>biuro.amtygi@gmail.com</p>
        </div>

        <div class="kontakt-box">
            <div class="ikonka">
               
                <svg width="40" height="40" fill="white" viewBox="0 0 24 24">
                    <path d="M12 2a7 7 0 017 7c0 5.25-7 13-7 13S5 14.25 5 9a7 7 0 017-7zm0 9.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z"/>
                </svg>
            </div>
            <p><strong>Punkt sprzedaży</strong><br>
            ul. Szosa Lubicka 168, Toruń<br>
            pn–pt: 09:00–16:00</p>

            <p><strong>Siedziba firmy</strong><br>
            ul. Jana Dekerta 14a/13, Toruń</p>
        </div>

    </div>
</section>

<br>


<br>
<br>
<br>
<br>
<br>
<br>
<br>



<footer>
    
</footer>
</body>
</html>

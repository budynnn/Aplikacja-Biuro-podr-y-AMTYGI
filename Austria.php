<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Austria - AMTYGI</title>
    <link href="dlakazdegokraju.css" rel="stylesheet">
</head>

<body>

<header>
    <h1><img src="logo_bezowe.png"> AMTYGI - Biuro podróży</h1>

    <a href="kraje.php" target="_self">Kraje</a>
    <a href="fiszki.php" target="_self">Fiszki</a>
    <a href="kontakt.php" target="_self">Kontakt</a>
    <a href="index.php" target="_self" id="sigma">Wyloguj</a>
</header>

<div class="travel-block">

    <aside class="images-container">
        <div class="image-large" style="background-image: url('austria-wieden.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('austria-alpy.jpg');"></div>
            <div style="background-image: url('austria-hallstatt.jpg');"></div>
        </div>
    </aside>

 
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 1h 10min</p>

        <p><strong>Pogoda Wiedeń:</strong> <span id="weather-wien">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 1200 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 9800 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

    <aside class="description">
        <h2>Austria</h2>
        <p>
            Austria to kraj gór, muzyki klasycznej i doskonałej jakości życia. 
            Wiedeń zachwyca elegancją, pałacami i kawiarniami, 
            natomiast Alpy oferują jedne z najlepszych tras narciarskich w Europie.
        </p>
        <p>
            Hallstatt, uznawany za jedno z najpiękniejszych miasteczek świata, 
            przyciąga spokojem i bajkowym krajobrazem.
        </p>
    </aside>

</div>

<footer></footer>


<script>
    const weatherDescriptions = {
        0: "Bezchmurnie",
        1: "Prawie bezchmurnie",
        2: "Częściowo pochmurno",
        3: "Pochmurno",
        51: "Mżawka",
        61: "Lekki deszcz",
        71: "Śnieg",
        95: "Burza"
    };

    async function loadWeatherWien() {
        const span = document.getElementById("weather-wien");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=48.2082&longitude=16.3738&current_weather=true"
            );

            const data = await response.json();
            const temp = data.current_weather.temperature;
            const code = data.current_weather.weathercode;
            const desc = weatherDescriptions[code] || "Warunki zmienne";

            span.textContent = `${temp}°C, ${desc}`;
        } catch {
            span.textContent = "Błąd pobierania";
        }
    }

    loadWeatherWien();
</script>

</body>
</html>

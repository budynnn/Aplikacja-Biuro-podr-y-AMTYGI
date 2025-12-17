<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egipt - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('piramidy.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('hurghada.jpg');"></div>
            <div style="background-image: url('luksor.jpg');"></div>
        </div>
    </aside>


    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 4h 30min</p>

        <p><strong>Pogoda Kair:</strong> <span id="weather-cairo">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 1500 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 12 000 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>


    <aside class="description">
        <h2>Egipt</h2>
        <p>
            Egipt to kraina starożytnych tajemnic, monumentalnych piramid i wyjątkowej kultury.
            Kair zachwyca życiem miasta oraz słynnym Muzeum Egipskim, a Luksor oferuje jedne z
            najważniejszych zabytków świata – Dolinę Królów czy świątynię w Karnaku.
        </p>
        <p>
            Poza zabytkami Egipt to także idealne miejsce na wypoczynek — Hurghada i Szarm el-Szejk
            gwarantują turkusowe morze, bajeczne rafy koralowe i mnóstwo słońca przez cały rok.
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

    async function loadWeatherCairo() {
        const span = document.getElementById("weather-cairo");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=30.0444&longitude=31.2357&current_weather=true"
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

    loadWeatherCairo();
</script>

</body>
</html>

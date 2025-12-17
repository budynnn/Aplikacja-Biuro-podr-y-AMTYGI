<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Włochy - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('koloseum.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('wenecja.jpg');"></div>
            <div style="background-image: url('florencja.jpg');"></div>
        </div>
    </aside>

    
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 2h 30min</p>

       
        <p><strong>Pogoda Rzym:</strong> <span id="weather-rome">Ładowanie...</span></p>

        <p><strong>Linie lotnicze:</strong> LOT, WizzAir, Ryanair</p>
        <!-- <p><strong>Najtańszy hotel:</strong> od 1200 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 12 000 zł / tydzień</p> -->
        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

    
    <aside class="description">
        <h2>Włochy</h2>
        <p>
            Włochy to kraj pełen niezwykłej historii, kultury i wyjątkowych smaków. Regiony różnią się klimatem i charakterem —
            od zabytkowego Rzymu, przez romantyczną Wenecję, po słoneczne południe.
        </p>
        <p>
            To idealne miejsce zarówno na zwiedzanie, jak i wypoczynek. Każdy znajdzie tu coś dla siebie: plaże, góry, zabytki,
            muzea oraz światowej klasy kuchnię, która od lat zachwyca turystów.
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

    async function loadWeatherRome() {
        const span = document.getElementById("weather-rome");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=41.9028&longitude=12.4964&current_weather=true"
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

    loadWeatherRome();
</script>

</body>
</html>

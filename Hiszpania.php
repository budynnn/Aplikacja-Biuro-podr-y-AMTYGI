<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiszpania - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('madryt.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('barcelona.jpg');"></div>
            <div style="background-image: url('sewilla.jpg');"></div>
        </div>
    </aside>

    
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 3h 15min</p>

        
        <p><strong>Pogoda Madryt:</strong> <span id="weather-madrid">Ładowanie...</span></p>

        <p><strong>Linie lotnicze:</strong> LOT, Ryanair, Iberia</p>
        <p><strong>Najtańszy hotel:</strong> od 1300 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 11 000 zł / tydzień</p>

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>


    <aside class="description">
        <h2>Hiszpania</h2>
        <p>
            Hiszpania to jedno z najcieplejszych i najbardziej kolorowych miejsc Europy.
            Każde miasto ma inny charakter – Madryt zachwyca nowoczesnością i muzeami, Barcelona łączy sztukę Gaudiego
            z nadmorskim klimatem, a Sewilla emanuje tradycją flamenco i piękną architekturą.
        </p>
        <p>
            To idealny kierunek zarówno dla miłośników zwiedzania, jak i słonecznego wypoczynku. Hiszpańska kuchnia,
            w tym tapas, paella i churros, nadaje podróży wyjątkowego smaku. Niezależnie od regionu – Hiszpania zawsze
            przyjmuje turystów z otwartymi ramionami.
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

    async function loadWeatherMadrid() {
        const span = document.getElementById("weather-madrid");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=40.4168&longitude=-3.7038&current_weather=true"
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

    loadWeatherMadrid();
</script>

</body>
</html>

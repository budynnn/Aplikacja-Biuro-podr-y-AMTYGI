<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grecja - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('santorini.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('ateny.jpg');"></div>
            <div style="background-image: url('korynt.jpg');"></div>
        </div>
    </aside>

    
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 3h 00min</p>

        <p><strong>Pogoda Ateny:</strong> <span id="weather-athens">Ładowanie...</span></p>

        <p><strong>Najtańszy hotel:</strong> od 1400 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 16 000 zł / tydzień</p>

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

    <aside class="description">
        <h2>Grecja</h2>
        <p>
            Grecja to kolebka cywilizacji europejskiej — kraj pełen historii, kultury i zapierających dech
            w piersiach widoków. Ateny oferują starożytne zabytki, które przenoszą w czasy mitologii i filozofów.
        </p>
        <p>
            Białe domki Santorini z widokiem na morze tworzą jeden z najbardziej rozpoznawalnych krajobrazów świata,
            a Korynt zachwyca malowniczym połączeniem gór i wody. Grecja to idealne miejsce zarówno
            do zwiedzania, jak i spokojnego wypoczynku.
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

    async function loadWeatherAthens() {
        const span = document.getElementById("weather-athens");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=37.9838&longitude=23.7275&current_weather=true"
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

    loadWeatherAthens();
</script>

</body>
</html>

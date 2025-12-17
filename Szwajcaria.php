<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szwajcaria - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('zurich.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('alpy.jpg');"></div>
            <div style="background-image: url('lucerna.jpg');"></div>
        </div>
    </aside>

  
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 1h 50min</p>

        <p><strong>Pogoda Zurych:</strong> <span id="weather-zurich">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 2200 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 25 000 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

   
    <aside class="description">
        <h2>Szwajcaria</h2>
        <p>
            Szwajcaria to kraj perfekcji – czyste jeziora, majestatyczne Alpy i stylowe miasta
            tworzą wyjątkowy klimat. Zurych zachwyca elegancją, nowoczesnością i kulturą,
            będąc jednym z najbardziej prestiżowych miast Europy.
        </p>
        <p>
            Lucerna oczarowuje średniowieczną architekturą i widokami na jeziora oraz góry,
            a Alpy oferują jedne z najpiękniejszych tras narciarskich i szlaków pieszych na świecie.
            To idealne miejsce dla miłośników natury, sportów i luksusowego wypoczynku.
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

    async function loadWeatherZurich() {
        const span = document.getElementById("weather-zurich");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=47.3769&longitude=8.5417&current_weather=true"
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

    loadWeatherZurich();
</script>

</body>
</html>

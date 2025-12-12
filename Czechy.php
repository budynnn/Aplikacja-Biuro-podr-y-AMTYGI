<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Czechy - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('praga.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('karpacz.jpg');"></div>
            <div style="background-image: url('cesky-krumlov.jpg');"></div>
        </div>
    </aside>

  
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 1h 10min</p>

        <p><strong>Pogoda Praga:</strong> <span id="weather-prague">Ładowanie...</span></p>

        <p><strong>Najtańszy hotel:</strong> od 900 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 7 500 zł / tydzień</p>

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

    
    <aside class="description">
        <h2>Czechy</h2>
        <p>
            Czechy to kraj o niezwykle bogatej historii, pełen klimatycznych uliczek i imponujących zabytków.
            Praga zachwyca Mostem Karola, Hradczanami oraz magiczną atmosferą, która przyciąga turystów przez cały rok.
        </p>
        <p>
            Český Krumlov to prawdziwa perła architektury, wpisana na listę UNESCO, a Karkonosze oferują wspaniałe
            możliwości wypoczynku dla miłośników natury i górskich wycieczek. Czechy to idealny kierunek
            zarówno na weekend, jak i dłuższy urlop.
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

    async function loadWeatherPrague() {
        const span = document.getElementById("weather-prague");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=50.0755&longitude=14.4378&current_weather=true"
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

    loadWeatherPrague();
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szwecja - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('szwecja-sztokholm.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('szwecja-laponia.jpg');"></div>
            <div style="background-image: url('szwecja-malmo.jpg');"></div>
        </div>
    </aside>

 
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 2h 30min</p>

        <p><strong>Pogoda Sztokholm:</strong> <span id="weather-stockholm">Ładowanie...</span></p>

        <p><strong>Najtańszy hotel:</strong> od 1200 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 10 000 zł / tydzień</p>

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

   
    <aside class="description">
        <h2>Szwecja</h2>
        <p>
            Szwecja to kraj nowoczesności, spokoju i zachwycającej natury. 
            Sztokholm przyciąga kanałami, architekturą i malowniczą starówką, 
            Laponia oferuje niesamowite widoki zorz polarnych, 
            a Malmö zachwyca nadmorskim klimatem i nowoczesną architekturą.
        </p>
        <p>
            Idealne miejsce dla osób ceniących naturę, aktywny wypoczynek
            i skandynawski styl życia.
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

    async function loadWeatherStockholm() {
        const span = document.getElementById("weather-stockholm");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=59.3293&longitude=18.0686&current_weather=true"
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

    loadWeatherStockholm();
</script>

</body>
</html>

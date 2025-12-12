<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portugalia - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('portugalia-lizbona.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('portugalia-porto.jpg');"></div>
            <div style="background-image: url('portugalia-algarve.jpg');"></div>
        </div>
    </aside>

   
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 3h 45min</p>

        <p><strong>Pogoda Lizbona:</strong> <span id="weather-lisbon">Ładowanie...</span></p>

        <p><strong>Najtańszy hotel:</strong> od 1600 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 11 000 zł / tydzień</p>

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

    <aside class="description">
        <h2>Portugalia</h2>
        <p>
            Portugalia to kraj pełen słońca, kolorowych uliczek i bogatej kultury. 
            Lizbona zachwyca architekturą, wąskimi uliczkami i klimatycznymi tramwajami,
            Porto słynie z winnic, charakterystycznych mostów i wina porto,
            a region Algarve oferuje przepiękne plaże oraz lazurowe wybrzeże.
        </p>
        <p>
            Idealne miejsce na wakacje dla miłośników historii, kuchni śródziemnomorskiej
            oraz odpoczynku nad Atlantykiem.
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

    async function loadWeatherLisbon() {
        const span = document.getElementById("weather-lisbon");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=38.7169&longitude=-9.139&current_weather=true"
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

    loadWeatherLisbon();
</script>

</body>
</html>

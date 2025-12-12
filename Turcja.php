<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turcja - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('istanbul.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('antalia.jpg');"></div>
            <div style="background-image: url('kapadocja.jpg');"></div>
        </div>
    </aside>

  
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 3h 45min</p>

        <p><strong>Pogoda Stambuł:</strong> <span id="weather-istanbul">Ładowanie...</span></p>

        <p><strong>Najtańszy hotel:</strong> od 1200 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 14 500 zł / tydzień</p>

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

  
    <aside class="description">
        <h2>Turcja</h2>
        <p>
            Turcja to kraj o niezwykle bogatej historii i kulturze, gdzie Wschód spotyka się z Zachodem.
            Stambuł urzeka wspaniałymi meczetami, zabytkami oraz niepowtarzalną atmosferą miasta
            rozciągającego się na dwóch kontynentach.
        </p>
        <p>
            Antalia zachwyca lazurowymi wodami i słonecznymi plażami, a Kapadocja słynie z magicznych
            lotów balonem oraz krajobrazów jak z innego świata. Turcja to idealny kierunek zarówno
            na zwiedzanie, jak i pełen relaks wypoczynek.
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

    async function loadWeatherIstanbul() {
        const span = document.getElementById("weather-istanbul");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=41.0082&longitude=28.9784&current_weather=true"
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

    loadWeatherIstanbul();
</script>

</body>
</html>

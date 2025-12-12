<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Francja - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('paryz.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('lazurowe-wybrzeze.jpg');"></div>
            <div style="background-image: url('loara.jpg');"></div>
        </div>
    </aside>

    
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 2h 15min</p>

        <p><strong>Pogoda Paryż:</strong> <span id="weather-paris">Ładowanie...</span></p>

        <p><strong>Najtańszy hotel:</strong> od 1500 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 18 000 zł / tydzień</p>

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

    
    <aside class="description">
        <h2>Francja</h2>
        <p>
            Francja to kraj elegancji, kultury i niezwykłej różnorodności. Paryż zachwyca ikonami
            architektury, muzeami i wyjątkową atmosferą, która od lat przyciąga turystów z całego świata.
        </p>
        <p>
            Słoneczne Lazurowe Wybrzeże kusi ciepłym morzem i luksusowymi kurortami, a Dolina Loary
            oferuje malownicze zamki oraz magiczne krajobrazy. Francja to idealny kierunek
            dla miłośników sztuki, historii, natury i doskonałej kuchni.
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

    async function loadWeatherParis() {
        const span = document.getElementById("weather-paris");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=48.8566&longitude=2.3522&current_weather=true"
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

    loadWeatherParis();
</script>

</body>
</html>

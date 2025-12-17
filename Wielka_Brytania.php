<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wielka Brytania - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('londyn.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('stonehenge.jpg');"></div>
            <div style="background-image: url('edinburgh.jpg');"></div>
        </div>
    </aside>

   
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 2h 20min</p>

        <p><strong>Pogoda Londyn:</strong> <span id="weather-london">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 1700 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 20 000 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

 
    <aside class="description">
        <h2>Wielka Brytania</h2>
        <p>
            Wielka Brytania to kraj pełen historii, kultury i różnorodnych krajobrazów.
            Londyn zachwyca światowej klasy muzeami, zabytkami oraz wyjątkową atmosferą nowoczesnej metropolii.
        </p>
        <p>
            Stonehenge skrywa tajemnice sprzed tysięcy lat, a Edynburg zachwyca średniowieczną architekturą
            i malowniczymi uliczkami. To kierunek idealny dla miłośników historii, sztuki i klimatycznych miast.
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

    async function loadWeatherLondon() {
        const span = document.getElementById("weather-london");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=51.5074&longitude=-0.1278&current_weather=true"
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

    loadWeatherLondon();
</script>

</body>
</html>

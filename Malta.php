<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malta - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('malta-blue-lagoon.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('malta-valletta.jpg');"></div>
            <div style="background-image: url('malta-mdina.jpg');"></div>
        </div>
    </aside>

   
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 2h 45min</p>

        <p><strong>Pogoda Valletta:</strong> <span id="weather-valletta">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 1800 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 12 500 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

  
    <aside class="description">
        <h2>Malta</h2>
        <p>
            Malta to słoneczna śródziemnomorska wyspa znana z krystalicznej wody,
            malowniczych plaż oraz bogatej historii sięgającej czasów rycerzy
            Zakonu Maltańskiego. Valletta zachwyca architekturą i klimatem,
            Mdina przenosi w średniowieczne czasy, a Blue Lagoon to jedno z
            najpiękniejszych miejsc do kąpieli w Europie.
        </p>
        <p>
            To idealny kierunek dla osób szukających relaksu, ciepła, nurkowania
            oraz urokliwych miasteczek z wyjątkowym charakterem.
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

    async function loadWeatherValletta() {
        const span = document.getElementById("weather-valletta");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=35.8997&longitude=14.5147&current_weather=true"
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

    loadWeatherValletta();
</script>

</body>
</html>

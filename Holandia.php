<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holandia - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('holandia-kwiaty.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('holandia-wiatraki.jpg');"></div>
            <div style="background-image: url('holandia-amsterdam.jpg');"></div>
        </div>
    </aside>

 
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 1h 50min</p>

        <p><strong>Pogoda Amsterdam:</strong> <span id="weather-amsterdam">Ładowanie...</span></p>

        <p><strong>Najtańszy hotel:</strong> od 1100 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 9500 zł / tydzień</p>

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

 
    <aside class="description">
        <h2>Holandia</h2>
        <p>
            Holandia to kraj kanałów, wiatraków i kolorowych pól tulipanów. 
            Amsterdam zachwyca zabytkowymi kamienicami, muzeami i wyjątkową atmosferą, 
            a wiejskie krajobrazy regionu Zaanse Schans oferują klasyczny holenderski klimat.
        </p>
        <p>
            To idealny kierunek dla miłośników natury, architektury i spokojnego stylu życia.
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

    async function loadWeatherAmsterdam() {
        const span = document.getElementById("weather-amsterdam");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=52.3676&longitude=4.9041&current_weather=true"
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

    loadWeatherAmsterdam();
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niemcy - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('berlin.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('monachium.jpg');"></div>
            <div style="background-image: url('hamburg.jpg');"></div>
        </div>
    </aside>

    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 1h 45min</p>

        
        <p><strong>Pogoda Berlin:</strong> <span id="weather-berlin">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 1100 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 10 500 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

    <aside class="description">
        <h2>Niemcy</h2>
        <p>
            Niemcy to kraj, który łączy historyczne dziedzictwo z nowoczesnym stylem życia.
            Berlin zachwyca muzeami, klimatycznymi dzielnicami oraz wyjątkową atmosferą miasta,
            które nieustannie się rozwija i inspiruje.
        </p>
        <p>
            Z kolei Monachium oferuje tradycyjne bawarskie klimaty, a Hamburg przyciąga
            piękną architekturą i jednym z największych portów Europy. Niezależnie od tego,
            czy wolisz kulturę, naturę czy gastronomię — w Niemczech każdy znajdzie coś dla siebie.
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

    async function loadWeatherBerlin() {
        const span = document.getElementById("weather-berlin");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=52.5200&longitude=13.4050&current_weather=true"
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

    loadWeatherBerlin();
</script>

</body>
</html>

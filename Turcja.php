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

        <!-- <p><strong>Najtańszy hotel:</strong> od 1200 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 14 500 zł / tydzień</p> -->

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
        <h3>Co warto Zwiedzić?</h3>
        <ol>
            <li>
                <h4>Stambuł</h4>
                <p>Miasto na dwóch kontynentach: Hagia Sophia, Błękitny Meczet, Wielki Bazar, rejs po Bosforze i smak tureckiej kawy.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/tr/ciragan-palace-kempinski-istanbul.pl.html"><b>Çırağan Palace Kempinski Istanbul</b></a> – 9.4/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/tr/ibis-styles-kurtkoy.pl.html?aid=304142&label=gen173nr-10CAso5AFCFXRoZS1ob3VzZS1nYWxhdGFzYXJheUgeWARotgGIAQGYATO4ARfIAQzYAQPoAQH4AQGIAgGoAgG4Aqa3jMoGwAIB0gIkZDE2ZWMwNDAtZjgzZC00ZjcxLTg3MzUtNGU4Y2QxYmEzODJh2AIB4AIB&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=1350489702_416803247_2_2_0&checkin=2025-12-19&checkout=2025-12-20&dest_id=-755070&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=5&highlighted_blocks=1350489702_416803247_2_2_0&hpos=5&matching_block_id=1350489702_416803247_2_2_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=1350489702_416803247_2_2_0__10136&srepoch=1766005689&srpvid=38a494933e89024b&type=total&ucfs=1&"><b>ibis Styles Istanbul Kurtkoy</b></a> – 9.2/10</li>
                </ul>
            </li>
            <li><h4>Kapadocja</h4>
                <p>Bajkowy krajobraz z kominami skalnymi, podziemnymi miastami, kościołami w skałach i lotami balonami o wschodzie słońca.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/tr/karlik-cave-suite.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALmt4zKBsACAdICJGVlOGQwNzhjLTQyNjUtNGZjYy04YmE5LWYwNWY0ZDk2OGQwNdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=639815004_255742132_0_1_0_905653&checkin=2025-12-19&checkout=2025-12-20&dest_id=2758&dest_type=region&dist=0&group_adults=2&group_children=1&hapos=17&highlighted_blocks=639815004_255742132_0_1_0_905653&hpos=17&matching_block_id=639815004_255742132_0_1_0_905653&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=639815004_255742132_0_1_0_905653_17955&srepoch=1766005845&srpvid=accc94cc9ca402ef&type=total&ucfs=1&"><b>Karlık Cave Suite Cappadocia</b></a> – 9.8/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/tr/sacred-house.pl.html"><b>Sacred House</b></a> – 9.3/10</li>
                </ul></li>
            <li><h4>Antalya(kaleiçi)</h4>
                <p>Turecka Riwiera: stare miasto Kaleiçi, plaże, wodospady Düden i ruiny rzymskie w otoczeniu gór Taurus.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/tr/eski-masal-hotel.pl.html?label=gen173nr-10CAso5AFCDHB1ZGluZy1zdWl0ZUgeWARotgGIAQGYATO4ARfIAQzYAQPoAQH4AQGIAgGoAgG4Aoi5jMoGwAIB0gIkZTIxMDUyMWEtYzI0Yi00OTZjLTk1YjItNTk5YTgzZTQwOGYx2AIB4AIB&sid=547a667c74a25d6c462c374a026e5370"><b>Eski Masal Hotel - Special Class</b></a> – 8.8/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/tr/tuvana.pl.html"><b>Tuvana Hotel</b></a> – 8.6/10</li>
                </ul></li>
            <li><h4>Pamukkale</h4>
                <p> Białe wapienne tarasy i baseny termalne, a obok starożytne Hierapolis z teatrem i nekropolią.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/tr/polat-thermal.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKfuozKBsACAdICJDdkZmY4YzZmLTYxODEtNDA1OC1iYTZhLTQwOTIzNjFhMGFkOdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=28209901_89822552_2_17_0%2C28209901_89822552_2_17_0&checkin=2025-12-19&checkout=2025-12-20&dest_id=-767582&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=44&highlighted_blocks=28209901_89822552_2_17_0%2C28209901_89822552_2_17_0&hpos=19&matching_block_id=28209901_89822552_2_17_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=28209901_89822552_2_17_0__16000%2C28209901_89822552_2_17_0__16000&srepoch=1766006197&srpvid=e9d6958ec5ce040a&type=total&ucfs=1&"><b>Polat Thermal Hotel</b></a> – 9.2/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/tr/venus.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKfuozKBsACAdICJDdkZmY4YzZmLTYxODEtNDA1OC1iYTZhLTQwOTIzNjFhMGFkOdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=8644403_377423210_0_1_0&checkin=2025-12-19&checkout=2025-12-20&dest_id=-767582&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=7&highlighted_blocks=8644403_377423210_0_1_0&hpos=7&matching_block_id=8644403_377423210_0_1_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=8644403_377423210_0_1_0__9100&srepoch=1766006113&srpvid=b4919558c6a60171&type=total&ucfs=1&"><b>Venus Hotel</b></a> – 9.0/10</li>
                </ul></li>
            <li><h4>Efez(Selçuk)</h4>
                <p>Najlepiej zachowane ruiny rzymskie na świecie: Biblioteka Celsusa, Wielki Teatr i ulica Marmurowa.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/tr/stone-house-izmir.pl.html?aid=304142&label=gen173nr-10CAso5AFCCG5pc2FueWFuSB5YBGi2AYgBAZgBM7gBF8gBDNgBA-gBAfgBAYgCAagCAbgC8LuMygbAAgHSAiQyYThmYzliYi1iNzFkLTRjYWItYWRkMi1mMjFlMjE3Zjk0ZjPYAgHgAgE&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=34420112_378444909_0_1_0&checkin=2025-12-19&checkout=2025-12-20&dest_id=-770114&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=41&highlighted_blocks=34420112_378444909_0_1_0&hpos=16&matching_block_id=34420112_378444909_0_1_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=34420112_378444909_0_1_0__27000&srepoch=1766006452&srpvid=a6ce960e575d005b&type=total&ucfs=1&"><b>Stonehouse</b></a> – 9.2/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/tr/nisanyan.pl.html"><b>Nisanyan Hotel</b></a> – 9.4/10</li>
                </ul></li>
        </ol>
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

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Austria - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('austria-wieden.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('austria-alpy.jpg');"></div>
            <div style="background-image: url('austria-hallstatt.jpg');"></div>
        </div>
    </aside>

 
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 1h 10min</p>

        <p><strong>Pogoda Wiedeń:</strong> <span id="weather-wien">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 1200 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 9800 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

    <aside class="description">
        <h2>Austria</h2>
        <p>
            Austria to kraj gór, muzyki klasycznej i doskonałej jakości życia. 
            Wiedeń zachwyca elegancją, pałacami i kawiarniami, 
            natomiast Alpy oferują jedne z najlepszych tras narciarskich w Europie.
        </p>
        <p>
            Hallstatt, uznawany za jedno z najpiękniejszych miasteczek świata, 
            przyciąga spokojem i bajkowym krajobrazem.
        </p>
        <h3>Co warto Zwiedzić?</h3>
        <ol>
            <li>
                <h4>Wiedeń</h4>
                <p>Pałac Schönbrunn, opera, kawiarnie, katedra św. Szczepana i walce.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/at/sacher-wien.pl.html"><b>Hotel Sacher Wien</b></a> – 9.5/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/at/atlanta.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKMmo3KBsACAdICJGNhOThhYjIwLTZiMTktNDk4ZC05YzExLWJkYTk4ODdhODU0ZtgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=38211805_387025280_0_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-1995499&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=25&highlighted_blocks=38211805_387025280_0_2_0&hpos=25&matching_block_id=38211805_387025280_0_2_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=38211805_387025280_0_2_0__10900&srepoch=1766018407&srpvid=7c9c04a089f50241&type=total&ucfs=1&"><b>Hotel Atlanta</b></a> – 8.1/10</li>
                </ul>
            </li>
            <li><h4>salzburg</h4>
                <p>Miasto Mozarta, twierdza Hohensalzburg, „Dźwięki muzyki”.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/at/gtauersperg.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKMmo3KBsACAdICJGNhOThhYjIwLTZiMTktNDk4ZC05YzExLWJkYTk4ODdhODU0ZtgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=7008622_384460822_3_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-1989985&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=6&highlighted_blocks=7008622_384460822_3_2_0&hpos=6&matching_block_id=7008622_384460822_3_2_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=7008622_384460822_3_2_0__25990&srepoch=1766018490&srpvid=c47b04d43401017b&type=total&ucfs=1&"><b>Boutique & Design Hotel AUERSPERG</b></a> – 9.3/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/at/goldener-hirsch.pl.html"><b>Hotel Goldener Hirsch</b></a> – 7.9/10</li>
                </ul></li>
            <li><h4>Innsburg</h4>
                <p> Stolica Alp, Złota Dachówka, skocznia i lodowiec.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/at/hotelinnsbruck.pl.html?aid=304142&label=gen173nr-10CAsoDjjNAkgeWARotgGIAQGYATO4ARfIAQzYAQPoAQH4AQGIAgGoAgG4AuObjcoGwAIB0gIkYWQ3MWRjMGYtNWFhMS00M2NhLTgyODAtYWJlYzczY2RiOWU02AIB4AIB&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=7010105_189777573_2_33_0_822392%2C7010106_189777573_1_33_0_822392&checkin=2025-12-18&checkout=2025-12-19&dest_id=-1981445&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=6&highlighted_blocks=7010105_189777573_2_33_0_822392%2C7010106_189777573_1_33_0_822392&hpos=6&matching_block_id=7010105_189777573_2_33_0_822392&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=7010105_189777573_2_33_0_822392_26092%2C7010106_189777573_1_33_0_822392_25292&srepoch=1766018598&srpvid=2a2604f251810065&type=total&ucfs=1&"><b>Hotel Innsbruck</b></a> – 9.1/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/at/rufi-39-s-amp-apartments.pl.html?aid=304142&label=gen173nr-10CAsoDjjNAkgeWARotgGIAQGYATO4ARfIAQzYAQPoAQH4AQGIAgGoAgG4AuObjcoGwAIB0gIkYWQ3MWRjMGYtNWFhMS00M2NhLTgyODAtYWJlYzczY2RiOWU02AIB4AIB&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=672786205_373109977_2_2_0_724793&checkin=2025-12-18&checkout=2025-12-19&dest_id=-1981445&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=1&highlighted_blocks=672786205_373109977_2_2_0_724793&hpos=1&matching_block_id=672786205_373109977_2_2_0_724793&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=672786205_373109977_2_2_0_724793_16070&srepoch=1766018539&srpvid=2a2604f251810065&type=total&ucfs=1&"><b>Rufi's Hotel Innsbruck</b></a> – 9.0/10</li>
                </ul></li>
            <li><h4>Hallstatt</h4>
                <p>Jedna z najpiękniejszych wiosek na świecie nad jeziorem, solne kopalnie.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/at/fenix-hall.pl.html?aid=304142&label=gen173nr-10CAsoDkISaGVyaXRhZ2UtaGFsbHN0YXR0SB5YBGi2AYgBAZgBM7gBF8gBDNgBA-gBAfgBAYgCAagCAbgCx5yNygbAAgHSAiRiN2VjZDM2OS1mNGEyLTRkMDYtYWNkNy04NDdlZjYwNzY3YmPYAgHgAgE&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=209248901_407903657_0_1_0%2C209248902_407903657_0_1_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-1979686&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=3&highlighted_blocks=209248901_407903657_0_1_0%2C209248902_407903657_0_1_0&hpos=3&matching_block_id=209248901_407903657_0_1_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=209248901_407903657_0_1_0__21600%2C209248902_407903657_0_1_0__23600&srepoch=1766018665&srpvid=00bd0530515103a7&type=total&ucfs=1&"><b>Fenix Hall Boutique Hotel Hallstatt</b></a> – 8.8/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/at/heritage-hallstatt.pl.html"><b>Heritage Hotel Hallstatt</b></a> – 8.7/10</li>
                </ul></li>
            <li><h4>Graz</h4>
                <p>Drugie co do wielkości miasto w Austrii, stare miasto znajduje się na liście UNESCO,  nowoczesna architektura.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/at/kai-36-graz.pl.html?aid=304142&label=gen173nr-10CAsoDkISaGVyaXRhZ2UtaGFsbHN0YXR0SB5YBGi2AYgBAZgBM7gBF8gBDNgBA-gBAfgBAYgCAagCAbgCx5yNygbAAgHSAiRiN2VjZDM2OS1mNGEyLTRkMDYtYWNkNy04NDdlZjYwNzY3YmPYAgHgAgE&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=568863001_216905431_1_0_0_797542%2C568863001_216905431_1_0_0_797542&checkin=2025-12-18&checkout=2025-12-19&dest_id=-1978544&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=4&highlighted_blocks=568863001_216905431_1_0_0_797542%2C568863001_216905431_1_0_0_797542&hpos=4&matching_block_id=568863001_216905431_1_0_0_797542&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=568863001_216905431_1_0_0_797542_13500%2C568863001_216905431_1_0_0_797542_13500&srepoch=1766018777&srpvid=0419056693880197&type=total&ucfs=1&"><b>Kai 36 - Hotel zwischen Fels und Fluss</b></a> – 9.4/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/at/b-amp-b-graz-puntigam.pl.html?aid=304142&label=gen173nr-10CAsoDkISaGVyaXRhZ2UtaGFsbHN0YXR0SB5YBGi2AYgBAZgBM7gBF8gBDNgBA-gBAfgBAYgCAagCAbgCx5yNygbAAgHSAiRiN2VjZDM2OS1mNGEyLTRkMDYtYWNkNy04NDdlZjYwNzY3YmPYAgHgAgE&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=409413103_329687747_3_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-1978544&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=2&highlighted_blocks=409413103_329687747_3_2_0&hpos=2&matching_block_id=409413103_329687747_3_2_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=409413103_329687747_3_2_0__8050&srepoch=1766018729&srpvid=e86a05491d340305&type=total&ucfs=1&"><b>B&B Hotel Graz City-Süd</b></a> – 8.4/10</li>
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

    async function loadWeatherWien() {
        const span = document.getElementById("weather-wien");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=48.2082&longitude=16.3738&current_weather=true"
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

    loadWeatherWien();
</script>

</body>
</html>

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

        <!-- <p><strong>Najtańszy hotel:</strong> od 1200 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 10 000 zł / tydzień</p> -->

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
        <h3>Co warto Zwiedzić?</h3>
        <ol>
            <li>
                <h4>Sztokholm</h4>
                <p>Miasto na 14 wyspach, Gamla Stan, Muzeum Vasa, Skansen.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/se/ett-hem.pl.html"><b>Ett Hem</b></a> – 9.6/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/se/mornington-stockholm.pl.html?aid=304142&label=gen173nr-10CAsoyAFCB2V0dC1oZW1IHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALVjI3KBsACAdICJGYyMmRhN2E5LWNmMjYtNGNmOS1hNDUzLTQ3NjMwZTRiNTBlYdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=1819905_361563927_2_1_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2524279&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=4&highlighted_blocks=1819905_361563927_2_1_0&hpos=4&matching_block_id=1819905_361563927_2_1_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=1819905_361563927_2_1_0__145800&srepoch=1766016654&srpvid=d5960136b16f004f&type=total&ucfs=1&"><b>Mornington Hotel Stockholm</b></a> – 8.4/10</li>
                </ul>
            </li>
            <li><h4>Göteborg</h4>
                <p>Drugie co do wielkości miasto, archipelag, muzeum Volvo i klimat portowy.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/se/avalon.pl.html?aid=304142&label=gen173nr-10CAsoyAFCC3VwcGVyLWhvdXNlSB5YBGi2AYgBAZgBM7gBF8gBDNgBA-gBAfgBAYgCAagCAbgCqI2NygbAAgHSAiQ3MDk0MmQwNy03ZDQzLTQwMWUtYjgyOC0yMzViMTlhYjBkZTXYAgHgAgE&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=1833515_363197073_2_1_0_648034%2C1833501_363197073_1_1_0_648034&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2482986&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=4&highlighted_blocks=1833515_363197073_2_1_0_648034%2C1833501_363197073_1_1_0_648034&hpos=4&matching_block_id=1833515_363197073_2_1_0_648034&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=1833515_363197073_2_1_0_648034_193300%2C1833501_363197073_1_1_0_648034_172900&srepoch=1766016722&srpvid=d596015490f801d5&type=total&ucfs=1&"><b>Avalon Hotel</b></a> – 8.9/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/se/liseberg-grand-curiosa.pl.html?aid=304142&label=gen173nr-10CAsoyAFCC3VwcGVyLWhvdXNlSB5YBGi2AYgBAZgBM7gBF8gBDNgBA-gBAfgBAYgCAagCAbgCqI2NygbAAgHSAiQ3MDk0MmQwNy03ZDQzLTQwMWUtYjgyOC0yMzViMTlhYjBkZTXYAgHgAgE&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=915872901_363064645_2_1_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2482986&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=1&highlighted_blocks=915872901_363064645_2_1_0&hpos=1&matching_block_id=915872901_363064645_2_1_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=915872901_363064645_2_1_0__169500&srepoch=1766016694&srpvid=d596015490f801d5&type=total&ucfs=1&"><b>Liseberg Grand Curiosa Hotel</b></a> – 9.0/10</li>
                </ul></li>
            <li><h4>Uppsala</h4>
                <p>Najstarszy uniwersytet, katedra, runy i klimat studencki.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/se/villa-anna.pl.html?aid=304142&label=gen173nr-10CAsoyAFCB3VwcHNhbGFIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALyjY3KBsACAdICJDJmNTQ3NjZiLWExYTYtNGZmYy1hYzg1LTU4MmJjY2FjM2I2OdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=24136404_226071848_0_1_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2532413&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=23&highlighted_blocks=24136404_226071848_0_1_0&hpos=23&matching_block_id=24136404_226071848_0_1_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=24136404_226071848_0_1_0__405000&srepoch=1766016799&srpvid=d821017910d500a1&type=total&ucfs=1&"><b>Hotel Villa Anna</b></a> – 9.1/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/se/clarion-gillet.pl.html?aid=304142&label=gen173nr-10CAsoyAFCB3VwcHNhbGFIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALyjY3KBsACAdICJDJmNTQ3NjZiLWExYTYtNGZmYy1hYzg1LTU4MmJjY2FjM2I2OdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=1824203_410158632_2_1_0_645614&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2532413&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=9&highlighted_blocks=1824203_410158632_2_1_0_645614&hpos=9&matching_block_id=1824203_410158632_2_1_0_645614&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=1824203_410158632_2_1_0_645614_153500&srepoch=1766016771&srpvid=d821017910d500a1&type=total&ucfs=1&"><b>Clarion Hotel Gillet</b></a> – 8.4/10</li>
                </ul></li>
            <li><h4>Kiruna</h4>
                <p>Północna Szwecja: lodowy hotel, zorza polarna i kopalnia żelaza.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/se/icehotel.pl.html"><b>IceHotel</b></a> – 8.8/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/se/camp-ripan.pl.html"><b>Camp Ripan</b></a> – 8.6/10</li>
                </ul></li>
            <li><h4>Malmö</h4>
                <p>Nowoczesne miasto z Turning Torso i widokiem na Kopenhagę.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/se/best-western-premier-master-johan.pl.html?aid=304142&label=gen173nr-10CAsoyAFCEmNsYXJpb24tbWFsbW8tbGl2ZUgeWARotgGIAQGYATO4ARfIAQzYAQPoAQH4AQGIAgGoAgG4AvWOjcoGwAIB0gIkMWM3ZWFhNjYtODg5NC00YjQwLTliZjAtNmYxZDg3MDJiMjAy2AIB4AIB&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=1833615_222714209_2_1_549755813888_710011&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2503264&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=3&highlighted_blocks=1833615_222714209_2_1_549755813888_710011&hpos=3&matching_block_id=1833615_222714209_2_1_549755813888_710011&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=1833615_222714209_2_1_549755813888_710011_344000&srepoch=1766016936&srpvid=501f01cafa68039d&type=total&ucfs=1&"><b>MJ's</b></a> – 8.8/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/se/clarion-malmo-live.pl.html"><b>Clarion Hotel Malmö Live</b></a> – 8.6/10</li>
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

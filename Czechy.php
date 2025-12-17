<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Czechy - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('praga.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('karpacz.jpg');"></div>
            <div style="background-image: url('cesky-krumlov.jpg');"></div>
        </div>
    </aside>

  
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 1h 10min</p>

        <p><strong>Pogoda Praga:</strong> <span id="weather-prague">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 900 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 7 500 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

    
    <aside class="description">
        <h2>Czechy</h2>
        <p>
            Czechy to kraj o niezwykle bogatej historii, pełen klimatycznych uliczek i imponujących zabytków.
            Praga zachwyca Mostem Karola, Hradczanami oraz magiczną atmosferą, która przyciąga turystów przez cały rok.
        </p>
        <p>
            Český Krumlov to prawdziwa perła architektury, wpisana na listę UNESCO, a Karkonosze oferują wspaniałe
            możliwości wypoczynku dla miłośników natury i górskich wycieczek. Czechy to idealny kierunek
            zarówno na weekend, jak i dłuższy urlop.
        </p>
        <h3>Co warto Zwiedzić?</h3>
        <ol>
            <li>
                <h4>Praga</h4>
                <p>Most Karola, Zamek Praski, Stare Miasto, zegar astronomiczny i piwo za grosze.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/cz/four-seasons-prague.pl.html"><b>Four Seasons Hotel Prague</b></a> – 9.1/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/cz/josef-praha-1.pl.html?label=gen173nr-10CAsoOkIFam9zZWZIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALx14zKBsACAdICJDkwYjYxZGYyLTMyZWYtNDQ4YS1iNjIzLWU0ZWFkMjFjNTkxONgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370"><b>Hotel Josef</b></a> – 9.1/10</li>
                </ul>
            </li>
            <li><h4>Czeski Krumlov</h4>
                <p>Bajkowy zamek nad Wełtawą, kolorowe kamienice i atmosfera średniowiecza.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/cz/ruze.pl.html"><b>Hotel Ruze & Wellness</b></a> – 7.9/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/cz/mla1-2n.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALa2IzKBsACAdICJDg5NmY5YzRhLWVkNmQtNDkxOC05MDBlLThiMDZlMGMyYzhlMNgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=71582409_410212425_3_1_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-542911&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=1&highlighted_blocks=71582409_410212425_3_1_0&hpos=1&matching_block_id=71582409_410212425_3_1_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=71582409_410212425_3_1_0__12006&srepoch=1766010016&srpvid=d4b29d0aabf800ab&type=total&ucfs=1&"><b>Hotel Mlýn</b></a> – 8.7/10</li>
                </ul></li>
            <li><h4>karłowe Wary</h4>
                <p>Uzdrowisko z 13 gorącymi źródłami, kolonady, porcelana i luksusowe spa.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/cz/grandhotel-pupp.pl.html"><b>Grandhotel Pupp</b></a> – 9.2/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/cz/prezident.pl.html"><b>Prezident Luxury Spa & Wellness Hotel</b></a> – 8.7/10</li>
                </ul></li>
            <li><h4>Brno</h4>
                <p> Drugie co do wielkości miasto Czech, zamek Špilberk, modernistyczna architektura i świetne winiarnie.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/cz/efi-spa.pl.html?aid=304142&label=gen173nr-10CAsoOkITYmFyY2Vsby1icm5vLXBhbGFjZUgeWARotgGIAQGYATO4ARfIAQzYAQPoAQH4AQGIAgGoAgG4AoPajMoGwAIB0gIkOTRlNTNiMjMtOGUzYi00Njg4LWEyYjktYzRhMDAzZTk4NGFm2AIB4AIB&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=680151601_374029721_2_34_0_299935%2C680151605_374029721_2_34_0_299935&checkin=2025-12-18&checkout=2025-12-19&dest_id=-542184&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=9&highlighted_blocks=680151601_374029721_2_34_0_299935%2C680151605_374029721_2_34_0_299935&hpos=9&matching_block_id=680151601_374029721_2_34_0_299935&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=680151601_374029721_2_34_0_299935_13370%2C680151605_374029721_2_34_0_299935_14200&srepoch=1766010192&srpvid=ce399d59ea0800cd&type=total&ucfs=1&"><b>EFI SPA Hotel Superior & Pivovar</b></a> – 9.3/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/cz/voronez.pl.html?aid=304142&label=gen173nr-10CAsoOkITYmFyY2Vsby1icm5vLXBhbGFjZUgeWARotgGIAQGYATO4ARfIAQzYAQPoAQH4AQGIAgGoAgG4AoPajMoGwAIB0gIkOTRlNTNiMjMtOGUzYi00Njg4LWEyYjktYzRhMDAzZTk4NGFm2AIB4AIB&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=7706945_86360090_2_1_0_905085&checkin=2025-12-18&checkout=2025-12-19&dest_id=-542184&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=2&highlighted_blocks=7706945_86360090_2_1_0_905085&hpos=2&matching_block_id=7706945_86360090_2_1_0_905085&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=7706945_86360090_2_1_0_905085_246260&srepoch=1766010129&srpvid=706e9d4261b3026b&type=total&ucfs=1&"><b>OREA Congress Hotel Brno</b></a> – 9.1/10</li>
                </ul></li>
            <li><h4>Rednice-Valtice</h4>
                <p>Największy park krajobrazowy w Europie z pałacami i jeziorkami.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/cz/madl.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKA24zKBsACAdICJDA1MzAxMDNmLTg3ZWEtNDQyZS1iOTgyLTg3NGZlMDFhZDE5M9gCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=34453801_278049046_1_41_6047313952768%2C34453801_278049046_1_41_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-548606&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=42&highlighted_blocks=34453801_278049046_1_41_6047313952768%2C34453801_278049046_1_41_0&hpos=17&matching_block_id=34453801_278049046_1_41_6047313952768&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=34453801_278049046_1_41_6047313952768__7359%2C34453801_278049046_1_41_0__5559&srepoch=1766010387&srpvid=27a39dbd3ee501be&type=total&ucfs=1&"><b>Hotel Madl</b></a> – 9.2/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/cz/relax-stork.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKA24zKBsACAdICJDA1MzAxMDNmLTg3ZWEtNDQyZS1iOTgyLTg3NGZlMDFhZDE5M9gCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=28915804_413715702_2_1_66520453480448_385589&checkin=2025-12-18&checkout=2025-12-19&dest_id=-557489&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=23&highlighted_blocks=28915804_413715702_2_1_66520453480448_385589&hpos=23&matching_block_id=28915804_413715702_2_1_66520453480448_385589&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=28915804_413715702_2_1_66520453480448_385589_265350&srepoch=1766010334&srpvid=d8bd9d9be04501c0&type=total&ucfs=1&"><b>Relax Hotel Stork</b></a> – 8.9/10</li>
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

    async function loadWeatherPrague() {
        const span = document.getElementById("weather-prague");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=50.0755&longitude=14.4378&current_weather=true"
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

    loadWeatherPrague();
</script>

</body>
</html>

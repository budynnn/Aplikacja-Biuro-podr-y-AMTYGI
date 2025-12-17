<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grecja - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('santorini.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('ateny.jpg');"></div>
            <div style="background-image: url('korynt.jpg');"></div>
        </div>
    </aside>

    
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 3h 00min</p>

        <p><strong>Pogoda Ateny:</strong> <span id="weather-athens">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 1400 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 16 000 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

    <aside class="description">
        <h2>Grecja</h2>
        <p>
            Grecja to kolebka cywilizacji europejskiej — kraj pełen historii, kultury i zapierających dech
            w piersiach widoków. Ateny oferują starożytne zabytki, które przenoszą w czasy mitologii i filozofów.
        </p>
        <p>
            Białe domki Santorini z widokiem na morze tworzą jeden z najbardziej rozpoznawalnych krajobrazów świata,
            a Korynt zachwyca malowniczym połączeniem gór i wody. Grecja to idealne miejsce zarówno
            do zwiedzania, jak i spokojnego wypoczynku.
        </p>
        <h3>Co warto Zwiedzić?</h3>
        <ol>
            <li>
                <h4>Ateny</h4>
                <p>Akropol z Partenonem, Agora, Plaka i wszechobecne ślady starożytności.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/gr/thelop-athens-luxury-suites.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALAx4zKBsACAdICJGIwNDMxMDI2LWEyY2EtNDQyYS1iNDhmLTI2MTI2YmFmMmQzZdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=919628903_363572621_3_0_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-814876&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=2&highlighted_blocks=919628903_363572621_3_0_0&hpos=2&matching_block_id=919628903_363572621_3_0_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=919628903_363572621_3_0_0__29210&srepoch=1766007859&srpvid=af4098ba8c7f01f7&type=total&ucfs=1&"><b>The Lop Athens Holidays Luxury Suites</b></a> – 10/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/gr/electra-metropolis.pl.html"><b>Electra Metropolis</b></a> – 9.2/10</li>
                </ul>
            </li>
            <li><h4>Santorini</h4>
                <p>Białe domy, niebieskie kopuły, wulkaniczne plaże i zachody słońca w Oia, które przyciągają miliony.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/gr/canaves-oia-epitome.pl.html"><b>Canaves Epitome - Small Luxury Hotels of the World</b></a> – 9.8/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/gr/oia-mare-villas.pl.html"><b>Oia Mare Villas</b></a> – 9.0/10</li>
                </ul></li>
            <li><h4>Mykonos</h4>
                <p>Ikoniczne wiatraki, Little Venice, plaże Paradise i najsłynniejsze imprezy na Wyspach Greckich.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/gr/sunset-cove.pl.html?aid=304142&label=gen173nr-10CAsoXEISY2F2by10YWdvby1teWtvbm9zSB5YBGi2AYgBAZgBM7gBF8gBDNgBA-gBAfgBAYgCAagCAbgCo8mMygbAAgHSAiQ4YWE2NTQ0NS0xODI1LTQ1MGItYmQ1Yi04M2M3NTM4MjMwYjHYAgHgAgE&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=1352480001_407576777_3_0_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=2813&dest_type=region&dist=0&group_adults=2&group_children=1&hapos=1&highlighted_blocks=1352480001_407576777_3_0_0&hpos=1&matching_block_id=1352480001_407576777_3_0_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=1352480001_407576777_3_0_0__30500&srepoch=1766008127&srpvid=01ee995a3b510496&type=total&ucfs=1&"><b>Sunset Cove</b></a> – 9.5/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/gr/mykonos-dream-villas-and-suites.pl.html?aid=304142&label=gen173nr-10CAsoXEISY2F2by10YWdvby1teWtvbm9zSB5YBGi2AYgBAZgBM7gBF8gBDNgBA-gBAfgBAYgCAagCAbgCo8mMygbAAgHSAiQ4YWE2NTQ0NS0xODI1LTQ1MGItYmQ1Yi04M2M3NTM4MjMwYjHYAgHgAgE&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=29300009_251039906_2_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=900039706&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=37&highlighted_blocks=29300009_251039906_2_2_0&hpos=12&matching_block_id=29300009_251039906_2_2_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=review_score_and_price&sr_pri_blocks=29300009_251039906_2_2_0__24200&srepoch=1766008003&srpvid=c6929912a56300cd&type=total&ucfs=1&"><b>Mykonos Dream Villas</b></a> – 9.2/10</li>
                </ul></li>
            <li><h4>Kreta</h4>
                <p>Pałac w Knossos, plaże Elafonisi i Balos, wąwóz Samaria i autentyczna kreteńska kuchnia.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/gr/domes-noruz-chania.pl.html"><b>Domes Noruz Chania, Autograph Collection- Adults Only</b></a> – 9.5/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/gr/avra-imperial.pl.html"><b>Avra Imperial Hotel</b></a> – 8.6/10</li>
                </ul></li>
            <li><h4>Rodos</h4>
                <p> Średniowieczne Stare Miasto (UNESCO), ulica Rycerzy, Kolos z Rodos i piękne plaże.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/gr/rodos-park-suites.pl.html"><b>Rodos Park</b></a> – 9.0/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/gr/bestwesternplazahotelrhodes.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKLzIzKBsACAdICJGY2YzEwZDNlLTIxNjUtNDNlYi04ODM1LTQ0ODlhODgyNzVmZNgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=9556320_85722235_3_41_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=1591&dest_type=region&dist=0&group_adults=2&group_children=1&hapos=6&highlighted_blocks=9556320_85722235_3_41_0&hpos=6&matching_block_id=9556320_85722235_3_41_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=9556320_85722235_3_41_0__12200&srepoch=1766008369&srpvid=e68299cdd511011a&type=total&ucfs=1&"><b>Best Western Plus Hotel Plaza</b></a> – 8.8/10</li>
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

    async function loadWeatherAthens() {
        const span = document.getElementById("weather-athens");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=37.9838&longitude=23.7275&current_weather=true"
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

    loadWeatherAthens();
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szwajcaria - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('zurich.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('alpy.jpg');"></div>
            <div style="background-image: url('lucerna.jpg');"></div>
        </div>
    </aside>

  
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 1h 50min</p>

        <p><strong>Pogoda Zurych:</strong> <span id="weather-zurich">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 2200 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 25 000 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

   
    <aside class="description">
        <h2>Szwajcaria</h2>
        <p>
            Szwajcaria to kraj perfekcji – czyste jeziora, majestatyczne Alpy i stylowe miasta
            tworzą wyjątkowy klimat. Zurych zachwyca elegancją, nowoczesnością i kulturą,
            będąc jednym z najbardziej prestiżowych miast Europy.
        </p>
        <p>
            Lucerna oczarowuje średniowieczną architekturą i widokami na jeziora oraz góry,
            a Alpy oferują jedne z najpiękniejszych tras narciarskich i szlaków pieszych na świecie.
            To idealne miejsce dla miłośników natury, sportów i luksusowego wypoczynku.
        </p>
        <h3>Co warto Zwiedzić?</h3>
        <ol>
            <li>
                <h4>Zurych</h4>
                <p>Największe miasto, jezioro, Altstadt, Bahnhofstrasse i najlepsze muzea.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/ch/baur-au-lac.pl.html"><b>Baur au Lac</b></a> – 9.3/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/ch/felix.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALb74zKBsACAdICJDg4MTk2YWY1LTY0NWEtNGIwNS04ZGJmLWNhMmM3MzY0ZGFiM9gCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=548819303_397107660_3_2_0_703916&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2554935&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=8&highlighted_blocks=548819303_397107660_3_2_0_703916&hpos=8&matching_block_id=548819303_397107660_3_2_0_703916&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=548819303_397107660_3_2_0_703916_26095&srepoch=1766012990&srpvid=ab30a2d27c41016d&type=total&ucfs=1&"><b>Hotel Felix</b></a> – 8.6/10</li>
                </ul>
            </li>
            <li><h4>Lucerna</h4>
                <p>Most Kapliczny, Jezioro Czterech Kantonów i widok na Pilatus.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/ch/schweizerhof-luzern.pl.html"><b>Hotel Schweizerhof Luzern</b></a> – 9.2/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/ch/lake-geneva.pl.html?aid=304142&label=gen173nr-10CAsoLEIMZGVzLWJhbGFuY2VzSB5YBGi2AYgBAZgBM7gBF8gBDNgBA-gBAfgBAYgCAagCAbgC7fCMygbAAgHSAiQ1ODI5MDg4NC0yYmZjLTQwNDUtOTg4Ni0zODU1ZDBiMjM5MTTYAgHgAgE&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=86477504_91476415_0_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2554677&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=1&highlighted_blocks=86477504_91476415_0_2_0&hpos=1&matching_block_id=86477504_91476415_0_2_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=86477504_91476415_0_2_0__16765&srepoch=1766013099&srpvid=52a9a2f718a8049a&type=total&ucfs=1&"><b>Lake Geneva Hotel</b></a> – 8.2/10</li>
                </ul></li>
            <li><h4>Interlaken</h4>
                <p> Brama do Alp Berneńskich: Jungfraujoch, Grindelwald i jeziora Thun i Brienz.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/ch/victoria-jungfrau-grand-spa.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALW8YzKBsACAdICJGMyNzQ2ZTg5LTNmMDctNDc4MS05ZGRkLTBkZTA1ZmQzZDhkYtgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=6695505_370506950_2_1_0_65573&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2552548&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=3&highlighted_blocks=6695505_370506950_2_1_0_65573&hpos=3&matching_block_id=6695505_370506950_2_1_0_65573&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=6695505_370506950_2_1_0_65573_139670&srepoch=1766013231&srpvid=15c5a34133c50149&type=total&ucfs=1&"><b>Victoria Jungfrau Grand Hotel & Spa</b></a> – 9.2/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/ch/interlaken.pl.html"><b>Hotel Interlaken</b></a> – 8.9/10</li>
                </ul></li>
            <li><h4>Genewa</h4>
                <p>Fontanna Jet d’Eau, ONZ, międzynarodowa atmosfera i jezioro.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/ch/d-angleterre.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALi8ozKBsACAdICJDJiNTk3Y2EyLTE4YjgtNDAwNi04MDhmLTEyNzAwNzY4ZTJlNdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=6545102_389219244_2_42_0_289838&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2552151&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=5&highlighted_blocks=6545102_389219244_2_42_0_289838&hpos=5&matching_block_id=6545102_389219244_2_42_0_289838&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=6545102_389219244_2_42_0_289838_96925&srepoch=1766013415&srpvid=e211a3811f470042&type=total&ucfs=1&"><b>Hotel d'Angleterre</b></a> – 9.1/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/ch/b-amp-b-geneva-airport.pl.html?label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALi8ozKBsACAdICJDJiNTk3Y2EyLTE4YjgtNDAwNi04MDhmLTEyNzAwNzY4ZTJlNdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&aid=304142&ucfs=1&arphpl=1&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2552151&dest_type=city&group_adults=2&req_adults=2&no_rooms=1&group_children=1&req_children=1&age=10&req_age=10&hpos=6&hapos=6&sr_order=popularity&srpvid=e211a3811f470042&srepoch=1766013348&all_sr_blocks=899331604_374371144_3_2_0_263841&highlighted_blocks=899331604_374371144_3_2_0_263841&matching_block_id=899331604_374371144_3_2_0_263841&sr_pri_blocks=899331604_374371144_3_2_0_263841_14425&from_sustainable_property_sr=1&from=searchresults"><b>B&B HOTEL Geneva Airport</b></a> – 8.7/10</li>
                </ul></li>
            <li><h4>Zermatt</h4>
                <p>Matterhorn, lodowiec, bez samochodów i najwyższe stacje kolejowe w Europie.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/ch/mont-cervin-palace.pl.html"><b>Mont Cervin Palace</b></a> – 8.6/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/ch/simi.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAL684zKBsACAdICJDRkMDNmODc1LWEyMDMtNGVjZi1iNjY4LTQ3ZTY5N2RlODhmNtgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=6746802_402120923_2_1_6047313952768_665279&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2554901&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=10&highlighted_blocks=6746802_402120923_2_1_6047313952768_665279&hpos=10&matching_block_id=6746802_402120923_2_1_6047313952768_665279&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=6746802_402120923_2_1_6047313952768_665279_34800&srepoch=1766013497&srpvid=d5b2a3cf6e660001&type=total&ucfs=1&"><b>Hotel Simi</b></a> – 8.6/10</li>
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

    async function loadWeatherZurich() {
        const span = document.getElementById("weather-zurich");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=47.3769&longitude=8.5417&current_weather=true"
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

    loadWeatherZurich();
</script>

</body>
</html>

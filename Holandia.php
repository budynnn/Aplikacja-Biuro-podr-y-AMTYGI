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

        <!-- <p><strong>Najtańszy hotel:</strong> od 1100 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 9500 zł / tydzień</p> -->

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
        <h3>Co warto Zwiedzić?</h3>
        <ol>
            <li>
                <h4>Amsterdam</h4>
                <p>Kanały, Anne Frank House, Rijksmuseum, rowery i Red Light District.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/nl/conservatorium-amsterdam.pl.html?aid=2276638&label=msn-9bW6JF8edym1Qyq6EG5_Vg-80745528414718%3Atikwd-80745678537644%3Aloc-151%3Aneo%3Amte%3Alp137466%3Adec%3Aqsconservatorium%20amsterdam%20hotel&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=34934802_126006379_2_41_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2140479&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=1&highlighted_blocks=34934802_126006379_2_41_0&hpos=1&matching_block_id=34934802_126006379_2_41_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=34934802_126006379_2_41_0__99485&srepoch=1766017440&srpvid=2bf102cd0d13004e&type=total&ucfs=1&"><b>Conservatorium Hotel - Operated by Mandarin Oriental</b></a> – 9.1</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/nl/olympic-amsterdam123.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAK7kY3KBsACAdICJDc0ZjM3M2NhLWUyODEtNGExNy04ZjBjLTg3NjYzYmMxNWY5OdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=460937805_349285028_0_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2140479&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=1&highlighted_blocks=460937805_349285028_0_2_0&hpos=1&matching_block_id=460937805_349285028_0_2_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=460937805_349285028_0_2_0__8806&srepoch=1766017231&srpvid=6aa40264d9a400fc&type=total&ucfs=1&"><b>Olympic Hotel</b></a> – 8.6/10</li>
                </ul>
            </li>
            <li><h4>Rotterdam</h4>
                <p>Nowoczesna architektura, port, Erasmusbrug i street art.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/nl/mainport-hotel.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALMk43KBsACAdICJDMxMDMxNTNlLWE4ZDEtNDBjNC1hNTJlLWJjMTU1ZDBkZDVmM9gCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=53819517_382578263_2_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2152403&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=10&highlighted_blocks=53819517_382578263_2_2_0&hpos=10&matching_block_id=53819517_382578263_2_2_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=53819517_382578263_2_2_0__26519&srepoch=1766017521&srpvid=334602ebe25103ea&type=total&ucfs=1&"><b>Haven Hotel Rotterdam, Curio Collection by Hilton</b></a> – 8.8/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/nl/arthotelrotterdam.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALMk43KBsACAdICJDMxMDMxNTNlLWE4ZDEtNDBjNC1hNTJlLWJjMTU1ZDBkZDVmM9gCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=1117218_95133803_0_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2152403&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=2&highlighted_blocks=1117218_95133803_0_2_0&hpos=2&matching_block_id=1117218_95133803_0_2_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=1117218_95133803_0_2_0__11921&srepoch=1766017554&srpvid=334602ebe25103ea&type=total&ucfs=1&"><b>ART Hotel Rotterdam-Fully Renovated</b></a> – 8.6/10</li>
                </ul></li>
            <li><h4>Haga</h4>
                <p>Parlament, Pałac Pokoju, plaża Scheveningen i różnorodne muzea.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/nl/de-plesman.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAK4lI3KBsACAdICJDAxN2E5Mzc5LWIxYjMtNGYxZS1iMDAyLTBhZDFkMzFjZGNlY9gCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=1265688402_399235112_2_2_0_880732%2C1265688402_399235112_2_2_0_880732&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2152921&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=2&highlighted_blocks=1265688402_399235112_2_2_0_880732%2C1265688402_399235112_2_2_0_880732&hpos=2&matching_block_id=1265688402_399235112_2_2_0_880732&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=1265688402_399235112_2_2_0_880732_13070%2C1265688402_399235112_2_2_0_880732_12450&srepoch=1766017657&srpvid=3a59032175a00288&type=total&ucfs=1&"><b>De Plesman Hotel The Hague</b></a> – 9.0/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/nl/gtbelair.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAK4lI3KBsACAdICJDAxN2E5Mzc5LWIxYjMtNGYxZS1iMDAyLTBhZDFkMzFjZGNlY9gCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=1038237_246416955_2_1_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2152921&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=5&highlighted_blocks=1038237_246416955_2_1_0&hpos=5&matching_block_id=1038237_246416955_2_1_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=1038237_246416955_2_1_0__21570&srepoch=1766017613&srpvid=3a59032175a00288&type=total&ucfs=1&"><b>Marriott Hotel The Hague</b></a> – 8.0/10</li>
                </ul></li>
            <li><h4>Utrecht</h4>
                <p>Kanały, wieża Dom, uniwersytet i klimat „małego Amsterdamu”.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/nl/ghkarelv.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKUlY3KBsACAdICJDA0ZDQ0MTM0LTEzZDItNDZkNS1hOWQ0LTFkY2M0M2FmMTgzONgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=1061153_422742530_3_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2154382&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=5&highlighted_blocks=1061153_422742530_3_2_0&hpos=5&matching_block_id=1061153_422742530_3_2_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=1061153_422742530_3_2_0__37064&srepoch=1766017749&srpvid=7c1703500b710366&type=total&ucfs=1&"><b>Grand Hotel Karel V</b></a> – 9.0/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/nl/conscious-oudegracht.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKUlY3KBsACAdICJDA0ZDQ0MTM0LTEzZDItNDZkNS1hOWQ0LTFkY2M0M2FmMTgzONgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=1390940807_412710804_3_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2154382&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=4&highlighted_blocks=1390940807_412710804_3_2_0&hpos=4&matching_block_id=1390940807_412710804_3_2_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=1390940807_412710804_3_2_0__16091&srepoch=1766017712&srpvid=7c1703500b710366&type=total&ucfs=1&"><b>Conscious Hotel Oudegracht</b></a> – 8.4/10</li>
                </ul></li>
            <li><h4>Keukenhof</h4>
                <p>Największy ogród kwiatowy świata (kwiecień–maj).</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/nl/grand-huis-ter-duin.pl.html?aid=304142&label=gen173nr-10CAsoqQFCDWRlLW5hY2h0ZWdhYWxIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALtlY3KBsACAdICJGZkNTI0ZWM1LWRkZjMtNDQxMy05ZjdlLWE5NDc3MWZlYmM3N9gCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=363214403_425180469_2_2_6047313952768&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2148742&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=22&highlighted_blocks=363214403_425180469_2_2_6047313952768&hpos=22&matching_block_id=363214403_425180469_2_2_6047313952768&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=363214403_425180469_2_2_6047313952768__27121&srepoch=1766017872&srpvid=00a50383fc930357&type=total&ucfs=1&"><b>Grand Hotel Huis ter Duin</b></a> – 8.4/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/nl/flora.pl.html?aid=304142&label=gen173nr-10CAsoqQFCDWRlLW5hY2h0ZWdhYWxIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALtlY3KBsACAdICJGZkNTI0ZWM1LWRkZjMtNDQxMy05ZjdlLWE5NDc3MWZlYmM3N9gCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=17108509_89000474_3_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2148742&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=7&highlighted_blocks=17108509_89000474_3_2_0&hpos=7&matching_block_id=17108509_89000474_3_2_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=17108509_89000474_3_2_0__13860&srepoch=1766017817&srpvid=00a50383fc930357&type=total&ucfs=1&"><b>Hotel Villa Flora</b></a> – 8.5/10</li>
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

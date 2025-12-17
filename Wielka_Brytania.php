<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wielka Brytania - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('londyn.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('stonehenge.jpg');"></div>
            <div style="background-image: url('edinburgh.jpg');"></div>
        </div>
    </aside>

   
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 2h 20min</p>

        <p><strong>Pogoda Londyn:</strong> <span id="weather-london">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 1700 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 20 000 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

 
    <aside class="description">
        <h2>Wielka Brytania</h2>
        <p>
            Wielka Brytania to kraj pełen historii, kultury i różnorodnych krajobrazów.
            Londyn zachwyca światowej klasy muzeami, zabytkami oraz wyjątkową atmosferą nowoczesnej metropolii.
        </p>
        <p>
            Stonehenge skrywa tajemnice sprzed tysięcy lat, a Edynburg zachwyca średniowieczną architekturą
            i malowniczymi uliczkami. To kierunek idealny dla miłośników historii, sztuki i klimatycznych miast.
        </p>
        <h3>Co warto Zwiedzić?</h3>
        <ol>
            <li>
                <h4>Londyn</h4>
                <p>Big Ben, London Eye, Tower Bridge, British Museum i niekończąca się lista muzeów i teatrów.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/gb/the-ritz-london.pl.html"><b>The Ritz London</b></a> – 9.5/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/gb/z-covent-garden.pl.html"><b>The Z Hotel Covent Garden</b></a> – 8.0/10</li>
                </ul>
            </li>
            <li><h4>Edynburg</h4>
                <p>Zamek na wzgórzu, Royal Mile, festiwal Fringe, szkockie puby i klimat Harry’ego Pottera.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/gb/canon-court-apartments.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKSz4zKBsACAdICJGFlODg4ODg0LTkyZTEtNDA1Ni05ZDk5LTA0MTQ2NmYwYzk1NNgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=3661804_425346203_0_0_0%2C3661804_425346203_0_0_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2595386&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=2&highlighted_blocks=3661804_425346203_0_0_0%2C3661804_425346203_0_0_0&hpos=2&matching_block_id=3661804_425346203_0_0_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=3661804_425346203_0_0_0__10930%2C3661804_425346203_0_0_0__10930&srepoch=1766008813&srpvid=5cb79aaa23ef080b&type=total&ucfs=1&"><b>Edinburgh Aparthotel</b></a> – 9.5/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/gb/71-hanover-suites.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKSz4zKBsACAdICJGFlODg4ODg0LTkyZTEtNDA1Ni05ZDk5LTA0MTQ2NmYwYzk1NNgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=261263103_104899105_4_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2595386&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=10&highlighted_blocks=261263103_104899105_4_2_0&hpos=10&matching_block_id=261263103_104899105_4_2_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=261263103_104899105_4_2_0__12375&srepoch=1766008764&srpvid=dae69a93ba4b01d5&type=total&ucfs=1&"><b>Hanover 71 Suites</b></a> – 8.3/10</li>
                </ul></li>
            <li><h4>Bath</h4>
                <p>Rzymskie łaźnie, georgiańskie budynki i największe uzdrowisko w Wielkiej Brytanii.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/gb/bailbrookhouse.pl.html?aid=304142&label=gen173nr-10CAsoUEIZdGhlLWdhaW5zYm9yb3VnaC1iYXRoLXNwYUgeWARotgGIAQGYATO4ARfIAQzYAQPoAQH4AQGIAgGoAgG4ApfQjMoGwAIB0gIkNGM2OTc1OTEtMGM4Zi00MDBiLWFhYmYtMDgxNWZkOTQ1NWQ22AIB4AIB&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=96224_137228642_0_2_0%2C96224_137228642_0_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2589418&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=16&highlighted_blocks=96224_137228642_0_2_0%2C96224_137228642_0_2_0&hpos=16&matching_block_id=96224_137228642_0_2_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=review_score_and_price&sr_pri_blocks=96224_137228642_0_2_0__12600%2C96224_137228642_0_2_0__12600&srepoch=1766008962&srpvid=a3d49acc8c5403ec&type=total&ucfs=1&"><b>Bailbrook House Hotel, Bath</b></a> – 9.0/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/gb/hampton-by-hilton-bath-city.pl.html?aid=304142&label=gen173nr-10CAsoUEIZdGhlLWdhaW5zYm9yb3VnaC1iYXRoLXNwYUgeWARotgGIAQGYATO4ARfIAQzYAQPoAQH4AQGIAgGoAgG4ApfQjMoGwAIB0gIkNGM2OTc1OTEtMGM4Zi00MDBiLWFhYmYtMDgxNWZkOTQ1NWQ22AIB4AIB&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=807329206_342195841_2_1_0_954208&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2589418&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=29&highlighted_blocks=807329206_342195841_2_1_0_954208&hpos=4&matching_block_id=807329206_342195841_2_1_0_954208&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=review_score_and_price&sr_pri_blocks=807329206_342195841_2_1_0_954208_13900&srepoch=1766008871&srpvid=a3d49acc8c5403ec&type=total&ucfs=1&"><b>Hampton By Hilton Bath City</b></a> – 8.6/10</li>
                </ul></li>
            <li><h4>Oxford</h4>
                <p>Najstarszy uniwersytet, kolegia, biblioteki i sceneria z filmów o Harrym Potterze.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/gb/the-old-bank.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKr0YzKBsACAdICJDhjMDk4Yjg3LTIzOWMtNDBiMC1iNzFjLTEzMzNmNDQxZGUyMNgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=25198709_120933818_2_2_0_1214248%2C25198709_120933818_2_2_0_1214248&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2604911&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=14&highlighted_blocks=25198709_120933818_2_2_0_1214248%2C25198709_120933818_2_2_0_1214248&hpos=14&matching_block_id=25198709_120933818_2_2_0_1214248&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=review_score_and_price&sr_pri_blocks=25198709_120933818_2_2_0_1214248_26775%2C25198709_120933818_2_2_0_1214248_26775&srepoch=1766009081&srpvid=7f189b29653600d1&type=total&ucfs=1&"><b>Old Bank Hotel</b></a> – 9.3/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/gb/old-parsonage.pl.html"><b>Old Parsonage Hotel</b></a> – 9.0/10</li>
                </ul></li>
            <li><h4>Lake District</h4>
                <p>Jeziora, góry i wioski Beatrix Potter – raj dla miłośników natury i pieszych wędrówek.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/gb/burnside-apartments-amp-spa.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKn0ozKBsACAdICJGY5YjRkNzBlLTNiZGUtNGUwNi1iOWM0LTE4ODc2YjQ3MzA1ZtgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=378415607_120607355_0_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=1437&dest_type=region&dist=0&group_adults=2&group_children=1&hapos=52&highlighted_blocks=378415607_120607355_0_2_0&hpos=2&matching_block_id=378415607_120607355_0_2_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=score&sr_pri_blocks=378415607_120607355_0_2_0__23550&srepoch=1766009266&srpvid=2bf19b5928440157&type=total&ucfs=1&"><b>Lakes Hotel & Spa Apartments</b></a> – 9.4/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/gb/damson-dene.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKn0ozKBsACAdICJGY5YjRkNzBlLTNiZGUtNGUwNi1iOWM0LTE4ODc2YjQ3MzA1ZtgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=17959903_355657735_2_1_6047313952768_387811&checkin=2025-12-18&checkout=2025-12-19&dest_id=1437&dest_type=region&dist=0&group_adults=2&group_children=1&hapos=3&highlighted_blocks=17959903_355657735_2_1_6047313952768_387811&hpos=3&matching_block_id=17959903_355657735_2_1_6047313952768_387811&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=17959903_355657735_2_1_6047313952768_387811_15725&srepoch=1766009153&srpvid=2bf19b5928440157&type=total&ucfs=1&"><b>Damson Dene Hotel</b></a> – 8.5/10</li>
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

    async function loadWeatherLondon() {
        const span = document.getElementById("weather-london");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=51.5074&longitude=-0.1278&current_weather=true"
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

    loadWeatherLondon();
</script>

</body>
</html>

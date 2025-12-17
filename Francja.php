<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Francja - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('paryz.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('lazurowe-wybrzeze.jpg');"></div>
            <div style="background-image: url('loara.jpg');"></div>
        </div>
    </aside>

    
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 2h 15min</p>

        <p><strong>Pogoda Paryż:</strong> <span id="weather-paris">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 1500 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 18 000 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

    
    <aside class="description">
        <h2>Francja</h2>
        <p>
            Francja to kraj elegancji, kultury i niezwykłej różnorodności. Paryż zachwyca ikonami
            architektury, muzeami i wyjątkową atmosferą, która od lat przyciąga turystów z całego świata.
        </p>
        <p>
            Słoneczne Lazurowe Wybrzeże kusi ciepłym morzem i luksusowymi kurortami, a Dolina Loary
            oferuje malownicze zamki oraz magiczne krajobrazy. Francja to idealny kierunek
            dla miłośników sztuki, historii, natury i doskonałej kuchni.
        </p>
        <h3>Co warto Zwiedzić?</h3>
        <ol>
            <li>
                <h4>Paryż</h4>
                <p>Miasto Miłości: Wieża Eiffla, Luwr, Sekwana, kawiarnie na Montmartre i croissanty o poranku.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/fr/ramada-paris-toureiffel.pl.html?aid=304142&label=gen173nr-10CAsoTUIKcml0ei1wYXJpc0geWARotgGIAQGYATO4ARfIAQzYAQPoAQH4AQGIAgGoAgG4Ati_jMoGwAIB0gIkOWNkZTZlYjQtMzhhZC00MmEwLThiMjgtODAxYTZlZWY5ZDE42AIB4AIB&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=5351321_138878381_0_2_0&checkin=2025-12-19&checkout=2025-12-20&dest_id=-1456928&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=37&highlighted_blocks=5351321_138878381_0_2_0&hpos=12&matching_block_id=5351321_138878381_0_2_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=5351321_138878381_0_2_0__30723&srepoch=1766006767&srpvid=501f96aca13a0423&type=total&ucfs=1&"><b>Le Parisis - Paris Tour Eiffel</b></a> – 9.0/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/fr/de-la-place-du-louvre.pl.html"><b>Hôtel de la Place du Louvre - Esprit de France</b></a> – 9.2/10</li>
                </ul>
            </li>
            <li><h4>Nicea</h4>
                <p>Perła Lazurowego Wybrzeża: Promenada Anglików, Stare Miasto, pastelowe fasady i plaże.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/fr/boscolo-exedra-nice-autograph-collection.pl.html?aid=304142&label=gen173nr-10CAsoTUINbmVncmVzY28tbmljZUgeWARotgGIAQGYATO4ARfIAQzYAQPoAQH4AQGIAgGoAgG4AvjAjMoGwAIB0gIkMWVhMDQyMGQtMDEyMi00MDgyLWE4ZmYtN2FlNzEwODJkYTNk2AIB4AIB&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=2447013_95148281_2_1_0_99106&checkin=2025-12-19&checkout=2025-12-20&dest_id=-1454990&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=26&highlighted_blocks=2447013_95148281_2_1_0_99106&hpos=1&matching_block_id=2447013_95148281_2_1_0_99106&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=2447013_95148281_2_1_0_99106_37207&srepoch=1766006998&srpvid=e86a96fc675c00c1&type=total&ucfs=1&"><b>Boscolo Nice Hotel & Spa</b></a> – 8.4/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/fr/la-perouse.pl.html"><b>Hôtel La Pérouse Nice Baie des Anges</b></a> – 8.9/10</li>
                </ul></li>
            <li><h4>Marsylia</h4>
                <p>Najstarsze miasto Francji: tętniący port, Calanques, bouillabaisse i prowansalski klimat.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/fr/marseille-dieu.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKLwozKBsACAdICJDIwOWQxNDY2LTJjNjgtNDlkNC1iNDVjLTljZTM2YzU3NDQ4ZdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=44329903_246028983_2_34_0&checkin=2025-12-19&checkout=2025-12-20&dest_id=-1449947&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=20&highlighted_blocks=44329903_246028983_2_34_0&hpos=20&matching_block_id=44329903_246028983_2_34_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=44329903_246028983_2_34_0__31296&srepoch=1766007129&srpvid=e9e0975c8eb002f8&type=total&ucfs=1&"><b>InterContinental Marseille - Hotel Dieu by IHG</b></a> – 8.7/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/fr/c2-marseille.pl.html"><b>Hotel C2</b></a> – 8.7/10</li>
                </ul></li>
            <li><h4>Lyon</h4>
                <p>Gastronomiczna stolica, Stare Miasto (UNESCO), cztery wzgórza i Festiwal Świateł w grudniu.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/fr/intercontinental-hotels-lyon-dieu.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAL0wozKBsACAdICJGJiZjgwNGFjLTVmYzgtNGNlZS05ODE4LWU3ZjVkZDRmYWJkMtgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=462427505_246084551_2_0_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-1448468&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=33&highlighted_blocks=462427505_246084551_2_0_0&hpos=8&matching_block_id=462427505_246084551_2_0_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=462427505_246084551_2_0_0__44990&srepoch=1766007267&srpvid=383297aaeea30113&type=total&ucfs=1&"><b>InterContinental Lyon - Hotel Dieu by IHG</b></a> – 9.1/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/fr/la-reine-astrid.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAL0wozKBsACAdICJGJiZjgwNGFjLTVmYzgtNGNlZS05ODE4LWU3ZjVkZDRmYWJkMtgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=22499419_186002193_0_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-1448468&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=25&highlighted_blocks=22499419_186002193_0_2_0&hpos=25&matching_block_id=22499419_186002193_0_2_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=22499419_186002193_0_2_0__16750&srepoch=1766007233&srpvid=cd7f978eb11803b2&type=total&ucfs=1&"><b>Warwick Reine Astrid - Lyon</b></a> – 8.9/10</li>
                </ul></li>
            <li><h4>Mont Saint-Michel</h4>
                <p>Bajkowy klasztor na wyspie w zatoce, otoczony przypływami – jedno z najbardziej magicznych miejsc w Europie.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/fr/ermitage-mont-saint-michel-beauvoir.pl.html?aid=304142&label=gen173nr-10CAsoTUIPbGEtbWVyZS1wb3VsYXJkSB5YBGi2AYgBAZgBM7gBF8gBDNgBA-gBAfgBAYgCAagCAbgCmcSMygbAAgHSAiQ4ZmIzYTI5Ny1kYjJhLTRkMTQtOTdlNi03NjNmMmFhODVhNWPYAgHgAgE&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=735353105_370791756_3_42_0_136349&checkin=2025-12-18&checkout=2025-12-19&dest_id=900039327&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=12&highlighted_blocks=735353105_370791756_3_42_0_136349&hpos=12&matching_block_id=735353105_370791756_3_42_0_136349&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=735353105_370791756_3_42_0_136349_52076&srepoch=1766007377&srpvid=d5b297d2a516026a&type=total&ucfs=1&"><b>Ermitage - Mont-Saint-Michel</b></a> – 8.9/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/fr/ibis-pontorson-baie-du-mont-saint-michel.pl.html?aid=304142&label=gen173nr-10CAsoTUIPbGEtbWVyZS1wb3VsYXJkSB5YBGi2AYgBAZgBM7gBF8gBDNgBA-gBAfgBAYgCAagCAbgCmcSMygbAAgHSAiQ4ZmIzYTI5Ny1kYjJhLTRkMTQtOTdlNi03NjNmMmFhODVhNWPYAgHgAgE&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=306104401_112213114_3_34_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-1465523&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=1&highlighted_blocks=306104401_112213114_3_34_0&hpos=1&matching_block_id=306104401_112213114_3_34_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=306104401_112213114_3_34_0__8983&srepoch=1766007522&srpvid=1a81980e17fc0560&type=total&ucfs=1&"><b>ibis Pontorson Baie Du Mont Saint Michel</b></a> – 8.0/10</li>
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

    async function loadWeatherParis() {
        const span = document.getElementById("weather-paris");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=48.8566&longitude=2.3522&current_weather=true"
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

    loadWeatherParis();
</script>

</body>
</html>

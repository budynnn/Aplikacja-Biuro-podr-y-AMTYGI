<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malta - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('malta-blue-lagoon.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('malta-valletta.jpg');"></div>
            <div style="background-image: url('malta-mdina.jpg');"></div>
        </div>
    </aside>

   
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 2h 45min</p>

        <p><strong>Pogoda Valletta:</strong> <span id="weather-valletta">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 1800 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 12 500 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

  
    <aside class="description">
        <h2>Malta</h2>
        <p>
            Malta to słoneczna śródziemnomorska wyspa znana z krystalicznej wody,
            malowniczych plaż oraz bogatej historii sięgającej czasów rycerzy
            Zakonu Maltańskiego. Valletta zachwyca architekturą i klimatem,
            Mdina przenosi w średniowieczne czasy, a Blue Lagoon to jedno z
            najpiękniejszych miejsc do kąpieli w Europie.
        </p>
        <p>
            To idealny kierunek dla osób szukających relaksu, ciepła, nurkowania
            oraz urokliwych miasteczek z wyjątkowym charakterem.
        </p>
        <h3>Co warto Zwiedzić?</h3>
        <ol>
            <li>
                <h4>Valletta</h4>
                <p> Stolica – cała na liście UNESCO: fortyfikacje, katedra św. Jana, Barrakka Gardens.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: a<a class="a" href="https://www.booking.com/hotel/mt/the-phoenicia-malta.pl.html?aid=304142&label=gen173nr-10CAsonAFCEXBhbGF6em8tY29uc2lnbGlhSB5YBGi2AYgBAZgBM7gBF8gBDNgBA-gBAfgBAYgCAagCAbgC-_2MygbAAgHSAiRjYmQwZmIzMy0zY2IwLTQwNTctOWI2Mi1iMDRmNGNmZTA4MGXYAgHgAgE&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=1752598_395915197_2_2_0_1075984&checkin=2025-12-18&checkout=2025-12-19&dest_id=-19310&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=3&highlighted_blocks=1752598_395915197_2_2_0_1075984&hpos=3&matching_block_id=1752598_395915197_2_2_0_1075984&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=1752598_395915197_2_2_0_1075984_80300&srepoch=1766014756&srpvid=5af3a6477d07033e&type=total&ucfs=1&"><b>The Phoenicia Malta - The Leading Hotels of the World</b></a> – 9.3/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/mt/palazzo-consiglia.pl.html"><b>Palazzo Consiglia - IK Collection</b></a> – 9.1/10</li>
                </ul>
            </li>
            <li><h4>Mdina</h4>
                <p>Ciche „Miasto Ciszy”, średniowieczne mury, wąskie uliczki i widok na wyspę.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/mt/palazzo-bifora.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALP_ozKBsACAdICJDk4N2IxMTllLTg1NTAtNDc4Ni1hMzA3LTdkMjg1NGFjYmI4NtgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=672322902_389799272_0_1_0%2C672322904_389799272_0_1_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-18857&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=2&highlighted_blocks=672322902_389799272_0_1_0%2C672322904_389799272_0_1_0&hpos=2&matching_block_id=672322902_389799272_0_1_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=672322902_389799272_0_1_0__14900%2C672322904_389799272_0_1_0__15800&srepoch=1766014855&srpvid=0a9ea66c459103f2&type=total&ucfs=1&"><b>Palazzo Bifora</b></a> – 8.9/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/mt/maison-medina.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALP_ozKBsACAdICJDk4N2IxMTllLTg1NTAtNDc4Ni1hMzA3LTdkMjg1NGFjYmI4NtgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=1203427202_400587670_2_1_549755813888&checkin=2025-12-18&checkout=2025-12-19&dest_id=-18857&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=1&highlighted_blocks=1203427202_400587670_2_1_549755813888&hpos=1&matching_block_id=1203427202_400587670_2_1_549755813888&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=1203427202_400587670_2_1_549755813888__16812&srepoch=1766014827&srpvid=0a9ea66c459103f2&type=total&ucfs=1&"><b>Maison Medina Malta</b></a> – 9.7/10</li>
                </ul></li>
            <li><h4>Gozo</h4>
                <p>Spokojniejsza siostrzana wyspa: Azure Window (przed zawaleniem), plaże i świątynie megalityczne.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/mt/ta-cenc.pl.html"><b>Hotel Ta' Cenc & Spa</b></a> – 8.4/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/mt/the-duke-boutique.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALU_4zKBsACAdICJGU3ZTk5YTE4LTI0MjUtNDkzMS05NzI5LWFhNDBlMmM5N2VkMNgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=209825501_95813296_0_1_66520453480448_901764&checkin=2025-12-18&checkout=2025-12-19&dest_id=981&dest_type=region&dist=0&group_adults=2&group_children=1&hapos=12&highlighted_blocks=209825501_95813296_0_1_66520453480448_901764&hpos=12&matching_block_id=209825501_95813296_0_1_66520453480448_901764&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=209825501_95813296_0_1_66520453480448_901764_12525&srepoch=1766014998&srpvid=4cfaa6bb20670014&type=total&ucfs=1&"><b>The Duke Boutique Hotel</b></a> – 9.5/10</li>
                </ul></li>
            <li><h4>Blue Lagoon(Comino)</h4>
                <p>Laguna o niebieskiej wodzie, idealna na jednodniową bądź dłuższą wycieczkę.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/mt/cesca-boutique.pl.html?aid=304142&label=gen173nr-10CAsonAFCBmNvbWlub0geWARotgGIAQGYATO4ARfIAQzYAQPoAQH4AQGIAgGoAgG4As6AjcoGwAIB0gIkNGNjMmY1NDYtNmZmNy00ZWFiLTkxYzAtZDk0ZmM2YTBhMDAw2AIB4AIB&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=348901008_360712254_2_1_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=900050204&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=23&highlighted_blocks=348901008_360712254_2_1_0&hpos=23&matching_block_id=348901008_360712254_2_1_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=348901008_360712254_2_1_0__19630&srepoch=1766015194&srpvid=00c5a6e74d9d0170&type=total&ucfs=1&"><b>Cesca's Boutique Hotel</b></a> – 9.2/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/mt/quaint-nadur.pl.html?aid=304142&label=gen173nr-10CAsonAFCBmNvbWlub0geWARotgGIAQGYATO4ARfIAQzYAQPoAQH4AQGIAgGoAgG4As6AjcoGwAIB0gIkNGNjMmY1NDYtNmZmNy00ZWFiLTkxYzAtZDk0ZmM2YTBhMDAw2AIB4AIB&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=136315502_388144181_2_1_549755813888_253093&checkin=2025-12-18&checkout=2025-12-19&dest_id=900050204&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=20&highlighted_blocks=136315502_388144181_2_1_549755813888_253093&hpos=20&matching_block_id=136315502_388144181_2_1_549755813888_253093&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=136315502_388144181_2_1_549755813888_253093_12100&srepoch=1766015126&srpvid=00c5a6e74d9d0170&type=total&ucfs=1&"><b>Quaint Boutique Hotel Nadur</b></a> – 9.3/10</li>
                </ul></li>
            <li><h4>Marsaxlokk</h4>
                <p>Urocza wioska rybacka z kolorowymi łodziami „luzzu” i niedzielnym targiem.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/mt/lulu-boutique.pl.html?aid=304142&label=gen173nr-10CAsonAFCE3RoZS1waG9lbmljaWEtbWFsdGFIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAL2gY3KBsACAdICJDlmNWJlZjEwLTAwYjEtNGI0OS1hNDgwLTkxYzg1YWI3ZWFkZNgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=632237606_373649538_2_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-19443&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=8&highlighted_blocks=632237606_373649538_2_2_0&hpos=8&matching_block_id=632237606_373649538_2_2_0&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=632237606_373649538_2_2_0__12500&srepoch=1766015323&srpvid=f10ca762e6e7042c&type=total&ucfs=1&"><b>Lulu Boutique Hotel</b></a> – 9.9/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/mt/cerviola.pl.html?aid=304142&label=gen173nr-10CAsonAFCE3RoZS1waG9lbmljaWEtbWFsdGFIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAL2gY3KBsACAdICJDlmNWJlZjEwLTAwYjEtNGI0OS1hNDgwLTkxYzg1YWI3ZWFkZNgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=139099807_419620075_0_1_0_426561&checkin=2025-12-18&checkout=2025-12-19&dest_id=-19443&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=11&highlighted_blocks=139099807_419620075_0_1_0_426561&hpos=11&matching_block_id=139099807_419620075_0_1_0_426561&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=139099807_419620075_0_1_0_426561_8100&srepoch=1766015383&srpvid=f10ca7832cd2030a&type=total&ucfs=1&"><b>Cerviola Hotel</b></a> – 8.2/10</li>
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

    async function loadWeatherValletta() {
        const span = document.getElementById("weather-valletta");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=35.8997&longitude=14.5147&current_weather=true"
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

    loadWeatherValletta();
</script>

</body>
</html>

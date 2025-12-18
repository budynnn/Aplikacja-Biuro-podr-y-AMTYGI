<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egipt - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('piramidy.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('hurghada.jpg');"></div>
            <div style="background-image: url('luksor.jpg');"></div>
        </div>
    </aside>


    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 4h 30min</p>

        <p><strong>Pogoda Kair:</strong> <span id="weather-cairo">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 1500 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 12 000 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>


    <aside class="description">
        <h2>Egipt</h2>
        <p>
            Egipt to kraina starożytnych tajemnic, monumentalnych piramid i wyjątkowej kultury.
            Kair zachwyca życiem miasta oraz słynnym Muzeum Egipskim, a Luksor oferuje jedne z
            najważniejszych zabytków świata – Dolinę Królów czy świątynię w Karnaku.
        </p>
        <p>
            Poza zabytkami Egipt to także idealne miejsce na wypoczynek — Hurghada i Szarm el-Szejk
            gwarantują turkusowe morze, bajeczne rafy koralowe i mnóstwo słońca przez cały rok.
        </p>
        <h3>Co warto Zwiedzić?</h3>
        <ol>
            <li>
                <h4>Kair</h4>
                <p>Piramidy w Gizie, Sfinks, Muzeum Egipskie i tętniący chaos miasta.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/eg/hyatt-centric-cairo-west.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKc94zKBsACAdICJDM4N2Q2ZmM5LTViMjgtNGE2ZC05YTNiLTM4Y2RhZDIzYmYyN9gCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=1238283712_395698371_2_2_0%2C1238283712_395698371_2_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-290692&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=31&highlighted_blocks=1238283712_395698371_2_2_0%2C1238283712_395698371_2_2_0&hpos=6&matching_block_id=1238283712_395698371_2_2_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=1238283712_395698371_2_2_0__21923%2C1238283712_395698371_2_2_0__21923&srepoch=1766013919&srpvid=a803a49fba02041d&type=total&ucfs=1&"><b>Hyatt Centric Cairo West</b></a> – 9.4/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/eg/steigenberger-el-tahrir.pl.html"><b>Steigenberger Hotel El Tahrir Cairo</b></a> – 9.3/10</li>
                </ul>
            </li>
            <li><h4>Luksor</h4>
                <p>Dolina Królów, świątynia Hatszepsut i Karnak – centrum starożytnego Egiptu.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/eg/al-moudira.pl.html"><b>Al Moudira Hotel</b></a> – 9.6/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/eg/sonesta-st-george-luxor.pl.html?aid=304142&label=gen173nr-10CAsoQ0IXc3RlaWdlbmJlcmdlci1lbC10YWhyaXJIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALU-IzKBsACAdICJGI4NWRkYzZmLTg0NzEtNDc1NS1hNmY0LTZlOWI3NThiOWQ3Y9gCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=24263825_289916687_2_42_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-290821&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=2&highlighted_blocks=24263825_289916687_2_42_0&hpos=2&matching_block_id=24263825_289916687_2_42_0&nad_cpc=0.5&nad_id=f8d96821-fe6c-4bca-b302-7e7f32e24bcc_0&nad_placement=SR_MAIN&nad_track=eyJhdWN0aW9uRXBvY2giOjE3NjYwMTQxMzA2MTEsInJhbmsiOjEsImtvZGRpVHJhY2tpbmdJbmZvIjoiNmtNMHR5dlZDdVVic1lBT082ZDBHWnRmcDVHem1MTlZEeXVTelpIVFlKTkc0b0VKV25jSVhGSk83S0h3Ym80OExTWEtoSHN1bEZEUWtBSTVueHRXNitQUTQ2MjltSGxlNlp4WFJMVE55Y2wwUlhSV0UwQ1VySks2OFlvWUdlTFUycFJRUk5GdVpsZVBwZEFkN3BlbnhMT3pZK0E1RUllWHpBZkUrTGlWdGsvOHVKeEhwSzlOUzdPTmxKYk9ycVl2aGUvNXJiZnRPZ0Y3N2c4Nk9LWWx5emgzbmdKOUd0YnErSUVOa1JiQzgveHdVaUJwZlprZk0zUXZtVWQzaU8xUVpySW1mNmhXTUFNTEpqOUxQb1AwSjEvaHhhbGJjengvNDNNTWpJMXRzK2lSSG5MeUVLQkZqWkdHZkY0R0pyaE9wdzNSa01WVjd0R01zTjhTeUVMYjBUR0liTm9EZ1pPSVRRWjV1ZnUxTytDRlBhclFwWWZtVHhlOGduNlVzWjF0SFFtb3ZidzJqeFRRZU1RYlZmU0RRLzdvVTFXWG0rYklhVmRGdEVXSjFNbzBrQ0dTT2dBakxEVmdMSi82ZkJFcDNhdzduMFJyVWVIN1UrRk1sdEhVOG41SzZ1UnNva3RmUytScnQrTENqdjdkTVluS2h0VGNZTldqTUwwN3VnOGtpMkNTVDBYRGRuVVhDbTJ0dlUzZkQzdDROUUpVSVhIWVE4cHpSdWYyVndlWHlkV1UxOVlTbVhBYWZTdVpqQVlvblp0QTZKZ3VlLzlvQUZ3ejYwTTRCWnQxOHMwYWFXbUxKWmlmTWJIU0ZROFh0YXlzWUxEZTM3TGxEMnZOMk80T0w4VHROandEK0ovUkZHdklYYjJ4N01wNnBKOGgyeGtYYTMyeXI3QW9QQ2FVUXd6ZEs5MVhWNDQvSWc5NG1VMXgydFhiVm5OcmlkMkpySTBOL29zakNvejVMd3JuU0dmdWpnK3lYZUNlZndkMVBUUVR5SzJ4ZFN3OEtzWkxsR0lwVFMycUZibGNaT3BVbCt3T2NtQW5vWEtPYUh3MmZZelFtNTI1VEY3UGxnK1E4S0c4dHFrMDZzNUZDamZ5eUhpZ3Q3S3kydEtOVW5xR0dvQUtUU2M1a1hDMTZtdEtWWTd3Z3NkSkJINjMvU21qKzl0VFpUbVJUOGZXcDA0SU8vY21SZGlPd1llYlU5ZHhoS25JZjNUbHNGT2JTYmFKSnZHM1g1WXU3Q08ySzI1QnZxRU5ES3BIMUdoZnlvaWlNK2Zrc1R0RHpKSWhYZ1Fndkt1OTd1WEl3bzJtMnVtZ1J2RHB1UHZRczBBbTFMZDZ0RDFqZ0hOVTlnZVdJWjJ4NVJvekI1L2FHZnlHYTJKU0hUOXFZeDV3UU5zaTcyMzdYdGgvVWh5MlA2MnpySVR5b05oQ0FuNWpOa1oxdng0MWtRZ3JrR0cyYk5wM1p1dittL1MrVm55TXY0cVNtRStzb3hsVExLV0F3TFpPMThDMXBIRlpyMit2UlV3MlhZUitJUXlBa1lQbnhkTVljZWxabER5NGo2T0VpZjVmRWpaSkttdHNLMkQzaC9MQlZhbUJvbTFDcC8rc0drREFUeUkwTXEwTklJOHpORmp1ODZ3U2xqTWQzbk5pZ1M0QkE2UkxWVmVSSTE2Vnptbitld2xtZjlLZ0huWnhRTTdDWmNCWGY2Q1lyWVJiZVlCb0VtZjAyYTkybU4wN0tDL0lCTndQY1FxNGhUcysrWnBLS0xSOSt5SnBGWUY0aEhRY2wyemhDV0NGc3ZLSnVJZE5KQkkxQm91S0F4VUR2dEJrTS9RWkY1SFc1UEVRTk9HS0YzUHRRSnRxL1lJVE5KZktBUFEzQnc0U3l0V3p5OXNQWk9uWGY5SGFSU3c1SjJGdnNLOXZWRFZWS1VYeGtXTncyNWpueGZPMUx1M2pBWkV0eFUvZGNIaXFocnF3clNwWmtubVVFYVZLIn0%3D&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=24263825_289916687_2_42_0__16880&srepoch=1766014138&srpvid=483da51892900001&type=total&ucfs=1&"><b>Sonesta St. George Hotel - Convention Center</b></a> – 9.1/10</li>
                </ul></li>
            <li><h4>Hurghada</h4>
                <p>Czerwone Morze, rafy koralowe i plaże – raj dla nurków i plażowiczów.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/eg/steigenberger-alcazar.pl.html"><b>Steigenberger Alcazar</b></a> – 9.5/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/eg/the-boutique-hurghada.pl.html"><b>AJIRA Boutique Hotel Hurghada Marina</b></a> – 8.2/10</li>
                </ul></li>
            <li><h4>Sharm El Sheikh</h4>
                <p>Najlepsze miejsca do nurkowania i snorkelingu na Półwyspie Synaj.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/eg/steigenberger-alcazar.pl.html?aid=304142&label=gen173nr-10CAsoQ0IRamF6LW1pcmFiZWwtYmVhY2hIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKW-ozKBsACAdICJGFjZGY5NzE0LTUwMjktNDZiOC04ZTMyLWE2Mzc4M2UzYjNjMdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=166491803_422434943_2_85_0_698551&checkin=2025-12-18&checkout=2025-12-19&dest_id=-302053&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=2&highlighted_blocks=166491803_422434943_2_85_0_698551&hpos=2&matching_block_id=166491803_422434943_2_85_0_698551&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=166491803_422434943_2_85_0_698551_40570&srepoch=1766014275&srpvid=faf3a55ac8430033&type=total&ucfs=1&"><b>Steigenberger Alcazar</b></a> – 9.5/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/eg/jaz-mirabel-beach.pl.html"><b>JAZ Mirabel Resort</b></a> – 8.6/10</li>
                </ul></li>
            <li><h4>Aleksandria</h4>
                <p>Biblioteka Aleksandryjska, Cytadela i śródziemnomorskie wybrzeże.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/eg/hilton-alexandria-green-plaza.pl.html"><b>Hilton Alexandria Green Plaza</b></a> – 8.2/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/eg/royal-tulip-alexandria.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALm-ozKBsACAdICJGFkZGRjOWZiLThhYjQtNDgwYy1iMTVkLWQwODAwZDRjMGM4YdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=78883120_386871369_2_34_6047313952768_131741&checkin=2025-12-18&checkout=2025-12-19&dest_id=-290263&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=3&highlighted_blocks=78883120_386871369_2_34_6047313952768_131741&hpos=3&matching_block_id=78883120_386871369_2_34_6047313952768_131741&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=78883120_386871369_2_34_6047313952768_131741_8810&srepoch=1766014369&srpvid=f9b9a58927f60269&type=total&ucfs=1&"><b>Tolip Hotel Alexandria</b></a> – 8.2/10</li>
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

    async function loadWeatherCairo() {
        const span = document.getElementById("weather-cairo");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=30.0444&longitude=31.2357&current_weather=true"
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

    loadWeatherCairo();
</script>

</body>
</html>

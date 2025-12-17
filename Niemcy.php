<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niemcy - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('berlin.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('monachium.jpg');"></div>
            <div style="background-image: url('hamburg.jpg');"></div>
        </div>
    </aside>

    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 1h 45min</p>

        
        <p><strong>Pogoda Berlin:</strong> <span id="weather-berlin">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 1100 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 10 500 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

    <aside class="description">
        <h2>Niemcy</h2>
        <p>
            Niemcy to kraj, który łączy historyczne dziedzictwo z nowoczesnym stylem życia.
            Berlin zachwyca muzeami, klimatycznymi dzielnicami oraz wyjątkową atmosferą miasta,
            które nieustannie się rozwija i inspiruje.
        </p>
        <p>
            Z kolei Monachium oferuje tradycyjne bawarskie klimaty, a Hamburg przyciąga
            piękną architekturą i jednym z największych portów Europy. Niezależnie od tego,
            czy wolisz kulturę, naturę czy gastronomię — w Niemczech każdy znajdzie coś dla siebie.
        </p>
        <h3>Co warto Zwiedzić?</h3>
        <ol>
            <li>
                <h4>Berlin</h4>
                <p>Miasto, które żyje historią: Mur Berliński, Brama Brandenburska, East Side Gallery, a do tego alternatywna scena klubowa i multikulti kuchnia.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/de/adlon-kempinski-berlin.pl.html"><b>Hotel Adlon Kempinski Berlin</b></a> – 9.1/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/de/sana-berlin.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKPr4zKBsACAdICJDViZGFjNDk2LTllZDMtNGRjMS05NjIwLTkwODQ0NmVlNjMyYdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&all_sr_blocks=27142712_91470574_2_2_0_452324&checkin=2025-12-19&checkout=2025-12-20&dist=0&group_adults=2&group_children=0&hapos=1&highlighted_blocks=27142712_91470574_2_2_0_452324&hpos=1&matching_block_id=27142712_91470574_2_2_0_452324&no_rooms=1&req_adults=2&req_children=0&room1=A%2CA&sb_price_type=total&sr_order=popularity&sr_pri_blocks=27142712_91470574_2_2_0_452324_12868&srepoch=1766004656&srpvid=2b22928af5df0099&type=total&ucfs=1&"><b>SANA Berlin Hotel</b></a> – 8.7/10</li>
                </ul>
            </li>
            <li><h4>Monachium</h4>
                <p>Bawarska stolica: Marienplatz z zegarem, Oktoberfest, pałace, piwo w ogródkach i alpejskie widoki w pobliżu.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/de/hyperion-munchen.pl.html?aid=304142&label=gen173nr-10CAsoO0IKa29lbmlnc2hvZkgeWARotgGIAQGYATO4ARfIAQzYAQPoAQH4AQGIAgGoAgG4AtWvjMoGwAIB0gIkYTNjZGFlZTEtNDcwYi00M2FjLTgzYjMtY2U4MGQxMDc5NDY52AIB4AIB&sid=547a667c74a25d6c462c374a026e5370&age=0&all_sr_blocks=387712106_195908718_0_2_0&checkin=2025-12-19&checkout=2025-12-20&dest_id=-1829149&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=92&highlighted_blocks=387712106_195908718_0_2_0&hpos=16&matching_block_id=387712106_195908718_0_2_0&no_rooms=1&req_adults=2&req_age=0&req_children=1&room1=A%2CA%2C0&sb_price_type=total&sr_order=popularity&sr_pri_blocks=387712106_195908718_0_2_0__23664&srepoch=1766004884&srpvid=af4092ed5f16052e&type=total&ucfs=1&"><b>HYPERION Hotel München</b></a> – 8.7/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/de/europamu.pl.html?aid=304142&label=gen173nr-10CAsoO0IKa29lbmlnc2hvZkgeWARotgGIAQGYATO4ARfIAQzYAQPoAQH4AQGIAgGoAgG4AtWvjMoGwAIB0gIkYTNjZGFlZTEtNDcwYi00M2FjLTgzYjMtY2U4MGQxMDc5NDY52AIB4AIB&sid=547a667c74a25d6c462c374a026e5370&age=0&all_sr_blocks=6001102_222477801_0_2_0&checkin=2025-12-19&checkout=2025-12-20&dest_id=-1829149&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=14&highlighted_blocks=6001102_222477801_0_2_0&hpos=14&matching_block_id=6001102_222477801_0_2_0&no_rooms=1&req_adults=2&req_age=0&req_children=1&room1=A%2CA%2C0&sb_price_type=total&sr_order=popularity&sr_pri_blocks=6001102_222477801_0_2_0__13900&srepoch=1766004790&srpvid=e86a92c65e1b04af&type=total&ucfs=1&"><b>Hotel Europa</b></a> – 8.6/10</li>
                </ul></li>
            <li><h4>Hamburg</h4>
                <p> Największy port Niemiec, nowoczesna Elbphilharmonie, historyczne Speicherstadt i nocne życie na Reeperbahn.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/de/conrad-hamburg.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALLsYzKBsACAdICJDQ4YTdlNDA4LWFmMjktNDJlOS05ODQ4LTRlYjBhMDgwMGFhMNgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=7230858_338444087_2_2_0&checkin=2025-12-19&checkout=2025-12-20&dest_id=-1785434&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=35&highlighted_blocks=7230858_338444087_2_2_0&hpos=10&matching_block_id=7230858_338444087_2_2_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=7230858_338444087_2_2_0__37145&srepoch=1766005048&srpvid=b6e99353e52f02c9&type=total&ucfs=1&"><b>Conrad Hamburg</b></a> – 8.9/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/de/pierdrei-hafencity-hamburg.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALLsYzKBsACAdICJDQ4YTdlNDA4LWFmMjktNDJlOS05ODQ4LTRlYjBhMDgwMGFhMNgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=317484003_211513179_2_2_0_304525&checkin=2025-12-19&checkout=2025-12-20&dest_id=-1785434&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=8&highlighted_blocks=317484003_211513179_2_2_0_304525&hpos=8&matching_block_id=317484003_211513179_2_2_0_304525&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=317484003_211513179_2_2_0_304525_21100&srepoch=1766004977&srpvid=4a34932c625b00f3&type=total&ucfs=1&"><b>PIERDREI Hotel HafenCity Hamburg</b></a> – 8.9/10</li>
                </ul></li>
            <li><h4>Kolonia</h4>
                <p>Ikoniczna gotycka katedra widoczna z daleka, spacer nad Renem, największy karnawał i piwo Kölsch w tradycyjnych browarach.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/de/premier-inn-koln-city-centre.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAL1sozKBsACAdICJDRhYTlmNWY5LTgzNGQtNGRmMy1hMDM1LTc4MDU3OTk0NTkzMtgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=1254179902_397934631_2_2_0%2C1254179904_401663094_1_2_0&checkin=2025-12-19&checkout=2025-12-20&dest_id=-1810561&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=2&highlighted_blocks=1254179902_397934631_2_2_0%2C1254179904_401663094_1_2_0&hpos=2&matching_block_id=1254179902_397934631_2_2_0&nad_cpc=0.79&nad_id=45041846-ccdf-44f0-a00c-2899ead720d4_0&nad_placement=SR_MAIN&nad_track=eyJhdWN0aW9uRXBvY2giOjE3NjYwMDUxMjY1NDYsInJhbmsiOjEsImtvZGRpVHJhY2tpbmdJbmZvIjoieEFPRUVoS1U1Qm95WTZzNThDZXhZdXpoMFRibVNhUk1YSTMxTnJZQm5Pa2pWSDUxdE5uOFFYVk84WkR3ODFCS0RzMXgvaisrM2hsUmd1ZEhjN1lYUzFKQ1Z0cHNudFNhNE1Kdzk4Zm1aU0JDaG9yWjZNb2VXb29pdnNsR2tKU3lSd1JIbHo3SHJINTRHNDVweTRnaVRkM0lYN0kzQ1o1dXNIUXVMSlBUbExMbGpxditPakR1VkVFbUFKM0s4ZUNGV3NWQ3BVc1hrN0pFdlZoakpIVW1pUVA3MGh3TTVzVTJ4QnpJZmxWWUpTT2N5Zit4SFQvT0E0M1QrNzNYVnJBOE1lN2hEWUxyVExZV3NKUW1KcHFETGJVRFF0SXZlQlJtU0JMa281T3dNdHNTQU9FQUp6T1JrQi9Qd1dDWjdqY1ZScnNDMGo0RTllT3N5SXJDTWU0VmtobjRVeTdXWUhpVG9xZG85aUF1T3dQaExSTjNoVWtGVitUOW5SbGl3R2JKZXV6blNSbHpRQkl5ZXA0akZnNWpwdzNtdm4yckNOclMzU3l1QzZrYXFxbk9zU09Wd1JadFZ1SUtnU1JwT0R3c2hlQ3hnbGNQV0liWEhlNmRTeW5TMkt6NFFKWGdyT0F6Wm5UT2RVMURNTlAyUlhPdmoyTXRuYVIxT1daeXNPVUNxK0pscW9MY1lSZDRmalE1Qm9nQUFLWEZDWG40SzBYZm8xNTZiaEZSVmJvZmROZkkvUGZ5cElrU2U5QzQ0SDN6YU9lTk9aeE1wTWtGMmxYc2RrU204NjJkcC9BcC9Cd01hamJ3Yy9IQnZHY3VzcHozMEM1MHBueFpUd2hWWmdXT2ZwOHE0SG5qQXBuT3R4TGtGK1hGSWkrODJnR2VoWHZlN0szTUs1VERHQnZhNGpmSERXYVdJdUZwVER3ZE9xK1pQcldLUW4yL2QwVndUaXNhbTArbldCYWhuUjJibkxGMTlMN3d3RUZLbzA5RldyMkxBeE00c1U2WTdmbWtEUmtuK21Oc3dmUUU5WEN2c2d5R0s4RFk0aWIyZG1xaXpmVU5HdHBUV2JiSGVIVFhPYlBkTUx3QlI3a2dINTdtOHJnSmZFUVFzZ2ZvQTkvbFZ5ai9BYUJhTjhWaS91UmFxcHhsdmJsQ2t0WFdobnRxbUxCeTg1V0orVkFpZFUyNnFVYm1mN1pyc2g0ZmhvNC9OeXNpNU5ncm9IYkZaR3ErVWNGOTJ1Tm1CamZUanY3YnU3VWQxcDFvbVdtclo0a0JmaXR0VE1Zb2RMWDNyMXp5Mnc0MWdDWHVpRFQ3QWp3NThYb3RXbWNkOHJhL0ZGY3FYRFNOKy9IRHFqUDZQejIwM2FjdThSYktuQmcrRDBNUU93aVBNdzVCZjl6OWpuYWVOMHoxbnlwTDNmajVJclUzOUZiNDR6bnQ3L1JuMTNKQlR0UmMrWGQ5ZXEwOGMzVFBkcWtlV3ZrWXhkckFzZnVMRUR6L3hQQisvRGZsbnNnWDBRR3J1eW1ySmJCZUl2NVJvWUdWTXZOT1dENlh1ZFBCb2xmVTZEUTlvN0FEZEtpbURuUC85VlBvazhvM0lZSnRqcElJVkVLdzJzN095OFArZ2N0ek5wcnBaK2RQbFlwa2Z1NnNtT01PSldtM2VJTGpnNW9GS1FBSEJjNlQ0VnRuRnY0a2ZXcnRnQm4zQ2VHazhQbTBEVXhGLzV1UFlLYzhvSCtGWFB2NGd6MXdUdFdTOFZrQjVKOUNLbFFDWkpYN0xhbWlSbm5LaXRIN0FHNXhqMWpRQlA2SllqMmhuT3JlUlZzdWRBQzBKUDBIWjVsclVBcE1TWXRvb1p1b1NnNEszOWkzdWZQbHRkUmtKaU1ma3FzSDRQNHNVQy9hUGs4Lzk4M2RSNVA3Tm1QUWdkTGFwc0pCaHpIZ3NlTlQ3Um5nbGY1emNaTm1QelFyVnVhRDlNS1p1U3Uyb05QeDVDMEJpU1FRNG9vZmJ4MVAxWWt1dFAvYngvdkZWV1BkZ1hxVzB4ckc2SSt3R0x3ZTIrcnBkNmxlUUhYUTU3eWoifQ%3D%3D&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=1254179902_397934631_2_2_0__22995%2C1254179904_401663094_1_2_0__21000&srepoch=1766005138&srpvid=3ce39382fba401c7&type=total&ucfs=1&"><b>Premier Inn Köln City Centre</b></a> – 8.4/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/de/leonardo-royal-cologne-airport.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAL1sozKBsACAdICJDRhYTlmNWY5LTgzNGQtNGRmMy1hMDM1LTc4MDU3OTk0NTkzMtgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=962044703_368809626_0_2_0_683417&checkin=2025-12-19&checkout=2025-12-20&dest_id=-1810561&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=10&highlighted_blocks=962044703_368809626_0_2_0_683417&hpos=10&matching_block_id=962044703_368809626_0_2_0_683417&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=962044703_368809626_0_2_0_683417_20475&srepoch=1766005195&srpvid=85cd9399535302dc&type=total&ucfs=1&"><b>Leonardo Royal Hotel Cologne Bonn Airport</b></a> – 8.9/10</li>
                </ul></li>
            <li><h4>Heidelberg</h4>
                <p>Najbardziej romantyczne miasto Niemiec: zamek na wzgórzu, most nad Neckarem, stare uliczki i atmosfera uniwersytecka.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/de/der-europaische-hof-europa.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALys4zKBsACAdICJGFjOGIzNzA4LTE5MGEtNDZiZi1iZTMzLTIxNTJkYjhlYmNkYdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=7283505_105804595_3_2_0_305076&checkin=2025-12-19&checkout=2025-12-20&dest_id=-1788826&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=27&highlighted_blocks=7283505_105804595_3_2_0_305076&hpos=2&matching_block_id=7283505_105804595_3_2_0_305076&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=7283505_105804595_3_2_0_305076_42000&srepoch=1766005317&srpvid=4bff93dc2eed03b1&type=total&ucfs=1&"><b>Hotel Europäischer Hof Heidelberg, Bestes Hotel Deutschlands in historischer Architektur</b></a> – 9.4/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/de/moderne-helle-wohnung.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuALys4zKBsACAdICJGFjOGIzNzA4LTE5MGEtNDZiZi1iZTMzLTIxNTJkYjhlYmNkYdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=1067502201_387625133_3_0_0&checkin=2025-12-19&checkout=2025-12-20&dest_id=-1788826&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=25&highlighted_blocks=1067502201_387625133_3_0_0&hpos=25&matching_block_id=1067502201_387625133_3_0_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=1067502201_387625133_3_0_0__16546&srepoch=1766005288&srpvid=9fe293c0acd90236&type=total&ucfs=1&"><b>Modernes und helles Apartment im Loft Stil</b></a> – 9.1/10</li>
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

    async function loadWeatherBerlin() {
        const span = document.getElementById("weather-berlin");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=52.5200&longitude=13.4050&current_weather=true"
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

    loadWeatherBerlin();
</script>

</body>
</html>

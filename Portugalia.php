<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portugalia - AMTYGI</title>
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
        <div class="image-large" style="background-image: url('portugalia-lizbona.jpg');"></div>
        <div class="image-small">
            <div style="background-image: url('portugalia-porto.jpg');"></div>
            <div style="background-image: url('portugalia-algarve.jpg');"></div>
        </div>
    </aside>

   
    <aside class="flight-info">
        <p><strong>Czas lotu:</strong> 3h 45min</p>

        <p><strong>Pogoda Lizbona:</strong> <span id="weather-lisbon">Ładowanie...</span></p>

        <!-- <p><strong>Najtańszy hotel:</strong> od 1600 zł / tydzień</p>
        <p><strong>Najdroższy hotel:</strong> ok. 11 000 zł / tydzień</p> -->

        <p>AMTYGI - Twoje zaufane biuro podróży.</p>
    </aside>

    <aside class="description">
        <h2>Portugalia</h2>
        <p>
            Portugalia to kraj pełen słońca, kolorowych uliczek i bogatej kultury. 
            Lizbona zachwyca architekturą, wąskimi uliczkami i klimatycznymi tramwajami,
            Porto słynie z winnic, charakterystycznych mostów i wina porto,
            a region Algarve oferuje przepiękne plaże oraz lazurowe wybrzeże.
        </p>
        <p>
            Idealne miejsce na wakacje dla miłośników historii, kuchni śródziemnomorskiej
            oraz odpoczynku nad Atlantykiem.
            <h3>Co warto Zwiedzić?</h3>
        <ol>
            <li>
                <h4>Lizbona</h4>
                <p>Tramwaj 28, Alfama, Belém, pastéis de nata i widok z zamku św. Jerzego.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/pt/corpo-santo.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKghY3KBsACAdICJGU5NzY1OTc3LTFmYTUtNDc0Zi05OTg1LTlhYzZkZGJjOWEzZdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=250891209_103577118_4_41_0_1087091&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2167973&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=3&highlighted_blocks=250891209_103577118_4_41_0_1087091&hpos=3&matching_block_id=250891209_103577118_4_41_0_1087091&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=250891209_103577118_4_41_0_1087091_66068&srepoch=1766015706&srpvid=6c45a81accc00320&type=total&ucfs=1&"><b>Corpo Santo Lisbon Historical Hotel</b></a> – 9.6/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/pt/memmo-alfama.pl.html"><b>Memmo Alfama - Design Hotels</b></a> – 9.2/10</li>
                </ul>
            </li>
            <li><h4>Porto</h4>
                <p>Wino porto, Ribeira nad Douro, most Luiz I i klimatyczne piwnice.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/pt/flattered-to-be-in-porto.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAL4hY3KBsACAdICJGQ4MzVhYmJhLWEyNDEtNGY1Zi04ZGU4LTEyNGU4YzA5M2E4MNgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=45362304_88538395_3_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2173088&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=2&highlighted_blocks=45362304_88538395_3_2_0&hpos=2&matching_block_id=45362304_88538395_3_2_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=closest_beach_distance_v2&sr_pri_blocks=45362304_88538395_3_2_0__24450&srepoch=1766015770&srpvid=27c0a844b3d4026c&type=total&ucfs=1&"><b>Flattered to be in Porto</b></a> – 9.4/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/pt/bessahotel-baixa.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAL4hY3KBsACAdICJGQ4MzVhYmJhLWEyNDEtNGY1Zi04ZGU4LTEyNGU4YzA5M2E4MNgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=616667306_240901550_0_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2173088&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=63&highlighted_blocks=616667306_240901550_0_2_0&hpos=13&matching_block_id=616667306_240901550_0_2_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=bayesian_review_score&sr_pri_blocks=616667306_240901550_0_2_0__17000&srepoch=1766015876&srpvid=27c0a844b3d4026c&type=total&ucfs=1&"><b>BessaHotel Baixa</b></a> – 9.2/10</li>
                </ul></li>
            <li><h4>Sintra</h4>
                <p>Bajkowe pałace Pena i Quinta da Regaleira, lasy i mgła.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/pt/arribas.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKuh43KBsACAdICJDA3YmZkYTU0LTEyN2UtNGI3Yy05ZjkzLTFkOTE0YTk1NDRmZNgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=3974705_414066785_4_1_0_386385&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2176842&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=29&highlighted_blocks=3974705_414066785_4_1_0_386385&hpos=4&matching_block_id=3974705_414066785_4_1_0_386385&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=3974705_414066785_4_1_0_386385_30372&srepoch=1766015976&srpvid=e982a8affb7d004a&type=total&ucfs=1&"><b>Arribas Sintra Hotel</b></a> – 8.9/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/pt/ibis-lisboa-sintra.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKuh43KBsACAdICJDA3YmZkYTU0LTEyN2UtNGI3Yy05ZjkzLTFkOTE0YTk1NDRmZNgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=28997504_95454264_2_2_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=-2176842&dest_type=city&dist=0&group_adults=2&group_children=1&hapos=4&highlighted_blocks=28997504_95454264_2_2_0&hpos=4&matching_block_id=28997504_95454264_2_2_0&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=28997504_95454264_2_2_0__7335&srepoch=1766016013&srpvid=e350a89f25f0027c&type=total&ucfs=1&"><b>Hotel Ibis Lisboa Sintra</b></a> – 7.9/10</li>
                </ul></li>
            <li><h4>Algarve</h4>
                <p>Złote klify, plaże, jaskinie morskie i słońce przez cały rok.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/pt/vila-vita-parc-resort-spa.pl.html"><b>Vila Vita Parc</b></a> – 9.4/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/pt/hilton-vilamoura.pl.html?aid=304142&label=gen173nr-10CAsouwFCGXZpbGEtdml0YS1wYXJjLXJlc29ydC1zcGFIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKdiI3KBsACAdICJGM3YmM5ZGUyLWE3OTMtNDlmNS04OTdhLWVmODVjN2Y0Zjc5Y9gCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=1&all_sr_blocks=3987424_274558665_2_42_0&checkin=2025-12-18&checkout=2025-12-19&dest_id=1064&dest_type=region&dist=0&group_adults=2&group_children=1&hapos=2&highlighted_blocks=3987424_274558665_2_42_0&hpos=2&matching_block_id=3987424_274558665_2_42_0&nad_cpc=0.79&nad_id=2d4754a9-7490-474b-affb-8d84e67b7134_0&nad_placement=SR_MAIN&nad_track=eyJhdWN0aW9uRXBvY2giOjE3NjYwMTYwODgwNjEsInJhbmsiOjEsImtvZGRpVHJhY2tpbmdJbmZvIjoiT3A5SmJtTSsvZEVxVXpTbXlvOGQ3OEgrNVQyTHMvZTlaaGN6RHg2eEFjNitTZ2NITTJUNWl6Qmhrc21UdDJBMWFDMVM1eFNLNlJNZVBCZXBOcWdFNmVDYSt0OXE0bzgrL3NFM1pNMUxLNUFaSVEyb2JzeUZZOG9TVkF4eEtmODlmY1ZIN1ZUZVY0aXdMVDl6dEc5OHlPUWZ6S2RLaDZ3cER5YndtREozMElOWU0xRGZWTTNrcDR4WHJ2SnpWdUFiUzlCMTdRUGpBeGtkekdxZDdidy9EV0xPN1hSaWFXbk1lT3BTdVgzK1dBdXVYWU5BS2FvUENOSm5pYS91R21NVSttKzJxZXBhT3YrNElVTlQ4TzM5R3BKN0VyWjJEdkRNMWt6ZUlMVXNKQkFDSnFiY2NKdjRLaGJCbGFDL2ltM1F1WFI3Q09rTUNiNDdtN2Z1M2RMRlFuSFN2UGpwK2xXa0dnakFuazZFV0lCVlRtUXpNRUlvaWNVYXZMa2I0ZFJ5S3ZSaVNvZ3grTkF5Z2JTUHhaa2k3Z2hIWERBbXVoYmNSY0xFSnhXdm45b3VOaVR0MnVqZkkyb1ZxV0w3U2VDNFhXZWtOa3ZRTEFoK0lieWVUM2E2NzNWdlljQ29SZnV5aXBMMWxzYWk0RlMvL0JiUlN6cUc4VkZ1RW1ZR0NVbU5JaTJkaUJwS3VTNWErZzhVYnRXL0pUNGlXdk1SNzZEN0tmaXdBWXhTVzArbGs1SlZvZGVBVG12dDdlL2xBdzk0VjhGdzQ2SjNodFFlaHlmNDd2SDNNUVBYNXg5elVZK0pibDBNakZVMkIvMHE0Zk9tV1RnODZJSUdYQVZ2bFJjeW41dVFpbnRDUUVyQmhrMGVkbUtyN3p4QzFsbFh3dFZyalJNWkFrQ3BxTE1aa3VwMWtVL3pkM0owdlN3S3ZpMTRxdDB1SkYvV3NxS0szcGlSUGV6L1ZKcGxKbncwWnJwdUhUTG1Yd2ZUcFEvQjVnV0ZWcmVuNzFwa0VEV3VkcysrUytEaXNIUENEZHVWUFpJZHBJTCtWYy84YWtnWnNpZCtINnNNeitUSWw2a09mdzZsWEx3MUpwdmRzcVpUbDVUdjVDVGhxdzJKaW5nR24zbE5zRTJBdzl4YmVWc1YybWt5VUs0amF3MW1QNllGQVl2bll0Mm9jZXVmT2s3bWo5Nk0vOXZXTmhNbDhSbHdDWnMreGdYazViRG9IZFVFVlNId3BTblowV2RJaXk2OHRTNXkxOWxUQ3pwVmNRWWliSzBFb0FpVVAzVEF5WHRBdkdRYS94d3k4RlV5ZEpWaXdhSWF5bForcFhwZGMzc0Q0WVI2eWdKZ2VjdTVXRlBqQmZXdjVhQ2V1UTNGVDk4bXRORi94eUdtY2dKck1xbWxsMi90KzJGbVhiMmIyNGdPWHRTc1FrUWIrbVpNNUdQa092VEJhbWdhUVZER1EyRTE0d3NSRWNXU1U4Szl5ZDRWZkpEbHUvSFNIR2JGN0JJWXlsUWRRVUNKWFV0eU5wamFXRUtCQVRTR2VCVDV0RkdKMmE3OTFOK3luQ08wQWNZK1JwOGJRTWdyK0JMdzZGQy9XSlFTb1hSb2x1YXZBM0JuV2xuVS9peEh6bEk3b0o1Qm42VG9kVEg0VTBvNTBFSzJJcEVjbC9yc1FTWXh1OTYySC9XN0NzbVlnYTZSbEJyR0pGMXVnS3U5L2FFb1NvVkFVdE1WeGc4OU1jYmFQaXBBbWVvTjZwUkh4VzJJeWtmNklDTDA3WVpuZ29GV09JTkNCRzZ3WEMxNWdCcDhxMXQ5WGtvdmowUkhLZGIwRzBvcys4akJTK1UvdW1TdkNkang5UTZFb2h3UUFFcUIrbVNtZ2hXL3kxL3JidE5lK2Y3VStlSWphbVRIZTBPcm5Ya01kZldiMGJvekxPYUR6Smh2N2hmZWtXSGhtMzBraUlxTHZqUFAxblAwSk51OGRVV25PaTkvRmZWM0xnPT0ifQ%3D%3D&no_rooms=1&req_adults=2&req_age=1&req_children=1&room1=A%2CA%2C1&sb_price_type=total&sr_order=popularity&sr_pri_blocks=3987424_274558665_2_42_0__20200&srepoch=1766016096&srpvid=0ef2002b6f270274&type=total&ucfs=1&#map_closed"><b>Hilton Vilamoura</b></a> – 8.6/10</li>
                </ul></li>
            <li><h4>Madeira</h4>
                <p>Wyspa kwiatów: levady, wulkany, wino i widok z Pico do Arieiro.</p>
                <h4>Proponowane Hotele:</h4>
                <ul>
                    <li>Najlepszy: <a class="a" href="https://www.booking.com/hotel/pt/dreams-madeira-resort-spa-amp-marina-madeira.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKSiY3KBsACAdICJGQxZWQ3MzBmLTRmYmUtNDY1Ni1hOGYzLWY1ZjVkMTBkZTBiNdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=1025260901_375252370_2_85_66520453480448&checkin=2025-12-18&checkout=2025-12-19&dest_id=2254&dest_type=region&dist=0&group_adults=2&group_children=1&hapos=2&highlighted_blocks=1025260901_375252370_2_85_66520453480448&hpos=2&matching_block_id=1025260901_375252370_2_85_66520453480448&nad_cpc=0.5&nad_id=f77c0168-69aa-4621-95ea-964308b885fb_0&nad_placement=SR_MAIN&nad_track=eyJhdWN0aW9uRXBvY2giOjE3NjYwMTYyODUwMDgsInJhbmsiOjEsImtvZGRpVHJhY2tpbmdJbmZvIjoiL3IwOXlNcTNzOWxweS94K1NzWDN2bjBhV0lTb0sxc1dwNitvdk1OTEVGeDNHcUpVOVRNeFB0cXpnc1ZWY3doK1VPZXlZYzhJQTJvYmUxNUJTZlc4eFExN1Y5TlZoOXZVbkRRZkxScDA3WHBLTDBUQXlueFA1ci8rbUlueUw0ZzRMQVV5WCtHK2MvN0YwdytXZ2VsNk8yNXNNeXBNNTJDNVFDLzJpNms1WVVocFBic2dtZEREUUxabmNKSTg3VEpQVnY1Y054ZzJwN1pYclZqY2RRUENDR3dsTklZcTRsUFBoQU96TzMraStMWlRYcXo5Z1JWckNVSFJySzBSZjUreFBseXRsRkdPcHlyTjdJS3NsZ1hvV0RKZWx2bmE4UXpZVStVNGMxY1RHRGwrSlN6RnpqZkRCb2xhLzRDbkU2ODUxakJRU1d4YVFaWm5WaDdMYWZtSUwwd2YwYXM5UWNvakxwY3FsaUFuY3NJSXRkQ0p1ZGtHd20wTTJ3K1hPRFV1UXRkNWMzOWZhSmQvUm9HdkxBTVdVak9BclNPSUIyMUhIOWlFZU44eGtIRERYUGRjZ3NPenowd1MwN010UEM5SXFjS3lFUFdtZjNpcDB4TGMxSHJlcDh0ZmJKOGlwSDFXUmJYdGtPZC96OUQrSm5kb3hPMVdjNXVReGZmdUxnamI4cC9pemN5SWdJNVdYRHJIbEVqcXVuY242bjQ3Q3gyODBwSThuaTRlM29JNFJQUG12S095eTU2Y1d3NkNwTllrbTVLeXRkcFE4dkpmRHdObjN0OHVlZDlIUWlMbjJPZkxSZXEwZ1RWMkZMc0xEMnZzUDlOK2I5UEhyRW5oZjlHV3phVkl0T0twQUsxWmpjYmVsQ29ubXR3S2hhOFY4MVJjSFJocTZ3R3ZhSDE4Rk9wck5Lc3ZuVThXU0kvbU1ycExYdzJiNWg2U3NRSFdxTmlPb2ZWT05va05MRmlaTjRDRFhGcmRhdml0cHdxdnR6ZzZtbUV4UVIzOHpGRHBkMHN6M1lWMUNWcTA2TExPMHBRcFFqcXhhMTBvclNjK2sydkdGNmdUQytPb21EblYxMGZrV0Z1SGd0d1QvamcwVUwydW1MOWh1ZWxtcWNoeWhldEdLbUdtUWdpMkxJZ0d1M1B5SjczWnNBeUI5TGErS2JSNTV3WVZNS3ZoN0FTemxHaG1kdjNaYlVqc0NDS042R1JSdnQ1ZlM5dElrWHNMcHlCazhEeHN0VnZ6NWY1QzBzSzNxRjYrSzMxcEZNbWlNbDJwZmhxaXdTcXMvT25wQnhaNUQ4M1pxekl0K3EwOElLZWtOWDl6UXBUNkcwRCs5QU45UDRHcytDS0FGQ3VLbmlVVWtHUHFkK3N5VjNhMmNlVThab2g0TEk4RWNhRDZkdzJXb2FTTmVDZUIybnc2VklKN2hWTmZzaUttNEFzUUNjQU5odklSSjg3bVBrT0NMbHZlR0NzeFhuaGYwSHhsWFhnQjR0clJwMG4yZ3RPRm9CZkJTb0pjUllxYnBlUzRSOHN5aisrd3ZFRE1jSTlCelhUVk5HeUdtQzZrUlhnSGlQNnFTaEVzTnBmNU9rUWdTY1VORExGanNtVGdvQTVPa1hCVVhQTm9aMDRVN2tPRmg2dkl5UU5nQ1orTmVuWWdZWEZyK0xzdU1hKytSZHNxTVNXdHlQQjQ2dUwvbEd0V3hTaDlmRkt5Zjk5cGltSnZMdzlkSmJaY1I5U21OMTN5QldLbThHUmFPd2lKRGFFOW5QSEhpdFIrd1psT283RDNXT0MwZkp1Tm53UDF3eW1jbTY0WlN1VS9KVTRRRnNsOEoyTjEveEFkU1lFVFVUdm14di8rMXduSzdDK1NYSUVudG5rMjcvUmRLakt4eDZ2TTBlVWZUd3BRZEg0SCtsaldsR3RCVFNWOGRmVmlMM1RtTEhvbEp5MWxDaHk4T2kyc1d0dFIybjV0T0VxNW5hOVdQaWJndEhXVzF0MTROVFZTZlE9PSJ9&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=1025260901_375252370_2_85_66520453480448__27100&srepoch=1766016321&srpvid=e211008ef258039f&type=total&ucfs=1&"><b>Dreams Madeira Resort Spa & Marina</b></a> – 8.8/10</li>
                    <li>Najtańszy dobry: <a class="a" href="https://www.booking.com/hotel/pt/vila-gale-santa-cruz.pl.html?aid=304142&label=gen173nr-10CBkoggI46AdIHlgEaLYBiAEBmAEzuAEXyAEM2AED6AEB-AEBiAIBqAIBuAKSiY3KBsACAdICJGQxZWQ3MzBmLTRmYmUtNDY1Ni1hOGYzLWY1ZjVkMTBkZTBiNdgCAeACAQ&sid=547a667c74a25d6c462c374a026e5370&age=10&all_sr_blocks=3916113_202686675_0_41_0_404882&checkin=2025-12-18&checkout=2025-12-19&dest_id=2254&dest_type=region&dist=0&group_adults=2&group_children=1&hapos=1&highlighted_blocks=3916113_202686675_0_41_0_404882&hpos=1&matching_block_id=3916113_202686675_0_41_0_404882&no_rooms=1&req_adults=2&req_age=10&req_children=1&room1=A%2CA%2C10&sb_price_type=total&sr_order=popularity&sr_pri_blocks=3916113_202686675_0_41_0_404882_14100&srepoch=1766016295&srpvid=e211008ef258039f&type=total&ucfs=1&"><b>Vila Gale Santa Cruz</b></a> – 8.5/10</li>
                </ul></li>
        </ol>
        </p>
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

    async function loadWeatherLisbon() {
        const span = document.getElementById("weather-lisbon");

        try {
            const response = await fetch(
                "https://api.open-meteo.com/v1/forecast?latitude=38.7169&longitude=-9.139&current_weather=true"
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

    loadWeatherLisbon();
</script>

</body>
</html>

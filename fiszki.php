<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl_fiszki.css">
</head>
<body>
    <header>
        <h1><img src="logo_bezowe.png"> AMTYGI - Biuro <br>podróży</h1>
        <a href="kraje.php" target="_self">Kraje</a>
        <h1 id="test">jajo</h1>
    </header>
    <aside id="tlo" class="open">sigma</aside>
    <nav id="nav" class="open">
        <ul>
            <li id="li_1">1</li>
            <li id="li_2">2</li>
            <li id="li_3">3</li>
            <li id="li_4">4</li>
            <li id="li_5">5</li>
            <li id="li_6">6</li>
        </ul>
        <script>
            const nav = document.getElementById("nav");
            const tlo = document.getElementById("tlo");
            const li_1 =document.getElementById("li_1");
            const li_2 =document.getElementById("li_2");
            const li_3 =document.getElementById("li_3");
            const li_4 =document.getElementById("li_4");
            const li_5 =document.getElementById("li_5");
            const li_6 =document.getElementById("li_6");

            nav.addEventListener("click" , (e) => {
                if (e.target === nav) {
                    if(nav.classList.contains("open")){}else{
                        nav.classList.add("open");
                        tlo.classList.add("open");
                    }
                }
            });
            li_1.addEventListener("click" , () => {
                if(nav.classList.contains("open")){
                    nav.classList.remove("open");
                    tlo.classList.remove("open");
                }
                fetch("fiszki1.php")
                    .then(res => res.json())
                    .then(data => {
                        console.log(data);
                        console.log(data[0].name);
                    });
            });
            li_2.addEventListener("click" , () => {
                if(nav.classList.contains("close")){

                }else{
                    nav.classList.add("close");
                }
            });
            li_3.addEventListener("click" , () => {
                if(nav.classList.contains("close")){

                }else{
                    nav.classList.add("close");
                }
            });
            li_4.addEventListener("click" , () => {
                if(nav.classList.contains("close")){

                }else{
                    nav.classList.add("close");
                }
            });
            li_5.addEventListener("click" , () => {
                if(nav.classList.contains("close")){

                }else{
                    nav.classList.add("close");
                }
            });
            li_6.addEventListener("click" , () => {
                if(nav.classList.contains("close")){
                    console.log("sigma1");
                }else{
                    console.log("sigma2");
                    nav.classList.add("close");
                }
            });
            
        </script>
    </nav>
    <main></main>
    <footer></footer>
</body>
</html>
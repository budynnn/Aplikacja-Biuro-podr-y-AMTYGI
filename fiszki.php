<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl_fiszki.css">
</head>
<body>
    <header></header>
    <nav id="nav">
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
            const li_1 =document.getElementById("li_1");
            const li_2 =document.getElementById("li_2");
            const li_3 =document.getElementById("li_3");
            const li_4 =document.getElementById("li_4");
            const li_5 =document.getElementById("li_5");
            const li_6 =document.getElementById("li_6");

            nav.classList.add("close");
            nav.addEventListener("click" , () => {
                if (e.target.tagName === "nav") {
                    if(nav.classList.contains("close")){
                        nav.classList.remove("close");
                    }
                }
            });
            li_1.addEventListener("click" , () => {
                if(nav.classList.contains("close")){

                }else{
                    nav.classList.add("close");
                }
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
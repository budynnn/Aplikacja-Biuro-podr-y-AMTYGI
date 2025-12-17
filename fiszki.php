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
    </header>
    <aside id="tlo" class="open"></aside>
    <nav id="nav" class="open">
        <div class="sigma" id="li_1">Podstawowe słówka</div>
        <div class="sigma" id="li_2">Państwa i stolice</div>
        <div class="sigma" id="li_3">Podróż</div>
        <div class="sigma" id="li_4">Jedzenie</div>
        <div class="sigma" id="li_5">Podstawowe zwroty</div>

        <script>
            let k = 1;
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
            tlo.addEventListener("click" , () => {
                if(nav.classList.contains("open")){
                    nav.classList.remove("open");
                    tlo.classList.remove("open");
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
                        const eng = data[0].eng;
                        const pl = data[0].pl;
                        question.textContent = pl;
                        answer.textContent = eng;
                        });
                k=1;
                    
            });
            li_2.addEventListener("click" , () => {
                if(nav.classList.contains("open")){
                    nav.classList.remove("open");
                    tlo.classList.remove("open");
                }
                fetch("fiszki2.php")
                    .then(res => res.json())
                    .then(data => {
                        const eng = data[0].eng;
                        const pl = data[0].pl;
                        question.textContent = pl;
                        answer.textContent = eng;
                        });
                k=2;
            });
            li_3.addEventListener("click" , () => {
                if(nav.classList.contains("open")){
                    nav.classList.remove("open");
                    tlo.classList.remove("open");
                }
                fetch("fiszki3.php")
                    .then(res => res.json())
                    .then(data => {
                        const eng = data[0].eng;
                        const pl = data[0].pl;
                        question.textContent = pl;
                        answer.textContent = eng;
                        });
                k=3;
            });
            li_4.addEventListener("click" , () => {
                if(nav.classList.contains("open")){
                    nav.classList.remove("open");
                    tlo.classList.remove("open");
                }
                fetch("fiszki4.php")
                    .then(res => res.json())
                    .then(data => {
                        const eng = data[0].eng;
                        const pl = data[0].pl;
                        question.textContent = pl;
                        answer.textContent = eng;
                        });
                k=4;
            });
            li_5.addEventListener("click" , () => {
                if(nav.classList.contains("open")){
                    nav.classList.remove("open");
                    tlo.classList.remove("open");
                }
                fetch("fiszki5.php")
                    .then(res => res.json())
                    .then(data => {
                        const eng = data[0].eng;
                        const pl = data[0].pl;
                        question.textContent = pl;
                        answer.textContent = eng;
                        });
                k=5;
            });
        </script>
    </nav>
    <main id="main">
        <div id="flashcard" class="card">
            <div id="question" class="front">Ładowanie...</div>
            <div id="answer" class="back"></div>
        </div>
    </main>
    <script>
        const flashcard = document.getElementById("flashcard");
        const question = document.getElementById("question");
        const answer = document.getElementById("answer");
        const mainContainer = document.getElementById("main");

        flashcard.addEventListener("click", () => {
            flashcard.classList.toggle("flipped");
        });

        // kliknięcie w main (poza fiszką) -> przesuwa fiszkę
        mainContainer.addEventListener("click", (e) => {
            if (flashcard.contains(e.target)) return;
            switch(k){
                case 1:
                    flashcard.classList.add("slide-out-left");

                    setTimeout(() => {
                        fetch("fiszki1.php")
                            .then(res => res.json())
                            .then(data => {
                                const randIndex = Math.floor(Math.random() * data.length);
                                const card = data[randIndex];

                                question.textContent = card.pl;
                                answer.textContent = card.eng;

                                flashcard.classList.remove("slide-out-left", "flipped");
                                flashcard.classList.add("slide-in-right");

                                setTimeout(() => {
                                    flashcard.classList.remove("slide-in-right");
                                }, 500);
                            });
                    }, 500);
                    break;
                case 2:
                    flashcard.classList.add("slide-out-left");

                    setTimeout(() => {
                        fetch("fiszki2.php")
                            .then(res => res.json())
                            .then(data => {
                                const randIndex = Math.floor(Math.random() * data.length);
                                const card = data[randIndex];

                                question.textContent = card.pl;
                                answer.textContent = card.eng;

                                flashcard.classList.remove("slide-out-left", "flipped");
                                flashcard.classList.add("slide-in-right");

                                setTimeout(() => {
                                    flashcard.classList.remove("slide-in-right");
                                }, 500);
                            });
                    }, 500);
                    break;
                case 3:
                    flashcard.classList.add("slide-out-left");

                    setTimeout(() => {
                        fetch("fiszki3.php")
                            .then(res => res.json())
                            .then(data => {
                                const randIndex = Math.floor(Math.random() * data.length);
                                const card = data[randIndex];

                                question.textContent = card.pl;
                                answer.textContent = card.eng;

                                flashcard.classList.remove("slide-out-left", "flipped");
                                flashcard.classList.add("slide-in-right");

                                setTimeout(() => {
                                    flashcard.classList.remove("slide-in-right");
                                }, 500);
                            });
                    }, 500);
                    break;
                case 4:
                    flashcard.classList.add("slide-out-left");

                    setTimeout(() => {
                        fetch("fiszki4.php")
                            .then(res => res.json())
                            .then(data => {
                                const randIndex = Math.floor(Math.random() * data.length);
                                const card = data[randIndex];

                                question.textContent = card.pl;
                                answer.textContent = card.eng;

                                flashcard.classList.remove("slide-out-left", "flipped");
                                flashcard.classList.add("slide-in-right");

                                setTimeout(() => {
                                    flashcard.classList.remove("slide-in-right");
                                }, 500);
                            });
                    }, 500);
                    break;
                case 5:
                    flashcard.classList.add("slide-out-left");

                    setTimeout(() => {
                        fetch("fiszki5.php")
                            .then(res => res.json())
                            .then(data => {
                                const randIndex = Math.floor(Math.random() * data.length);
                                const card = data[randIndex];

                                question.textContent = card.pl;
                                answer.textContent = card.eng;

                                flashcard.classList.remove("slide-out-left", "flipped");
                                flashcard.classList.add("slide-in-right");

                                setTimeout(() => {
                                    flashcard.classList.remove("slide-in-right");
                                }, 500);
                            });
                    }, 500);
                    break;
            }
        });
    </script>
    <footer></footer>
</body>
</html>
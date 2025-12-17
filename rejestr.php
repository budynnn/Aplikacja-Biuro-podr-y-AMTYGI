<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AMTYGI</title>
<link rel="stylesheet" href="styl_login_and_sign_in.css">
</head>
<body>
    <div class="aldiv">
        <div class="col1">
            <h1><img src="logo.png"> AMTYGI - Biuro podróży</h1>
            

            <main>
                <section></section>
                <div class="maindiv">
                    <h2>Zarejestruj się</h2>
                    <br><form method="post">
                        <input class="input" type="text" placeholder="Twoja nazwa" name="nazwa"><br><br>         
                        <input class="input" type="email" placeholder="Twój e-mail" name="mail"><br><br>
                        <input class="input" type="password" placeholder="Twoje Hasło" name="haslo"><br><br>
                        <input class="przycisk" type="submit" value="Utwórz konto"><br><br>
                    </form>
                    <?php
                        if(isset($_POST["nazwa"]) && isset($_POST["mail"]) && isset($_POST["haslo"])){
                            $plik = fopen("dane.txt", "w+");
                            $plik1 = fopen("dane1.txt", "w+");
                            $nazwa = $_POST["nazwa"];
                            $mail = $_POST["mail"];
                            $pass = $_POST["haslo"];
                            if(strlen($pass) == 0 || strlen($logi) == 0 || strlen($mail)){
                                echo "Uzupełnij dane!";
                            }
                            elseif(strlen($pass) < 8){
                                echo "Za krótkie hasło";
                            }
                            else{
                                fputs($plik1, $pass);
                                fputs($plik, $logi);
                                $polaczenie = mysqli_connect("localhost", "root", "", "kraje");
                                $zapytanie = "INSERT INTO `uzytkownicy` (`nazwa`, `haslo`, 'email') VALUES('$logi', '$pass', '$mail')";
                                $wynik = mysqli_query($polaczenie, $zapytanie);
                                header('location:kraje.php');
                                mysqli_close($polaczenie); 
                            }
                        }
                    ?>
                </div>
                <section></section>
            </main>
            <footer>
                <h3>Nie masz konta? <a href="rejestr.php">Zarejestuj się</a></h3>
            </footer>
            
        </div>
        <div class="col2">
            <nav><img id="slider" src="zdjecia/zdjecia_rejestr/Holandia.jpg" width="1000">
                <script>
                const images = ["zdjecia/zdjecia_rejestr/Francja.jpg","zdjecia/zdjecia_rejestr/Portugalia.jpg",
                "zdjecia/zdjecia_rejestr/Czechy.jpg","zdjecia/zdjecia_rejestr/Wlochy.jpg",
                "zdjecia/zdjecia_rejestr/Niemcy.jpg","zdjecia/zdjecia_rejestr/Grecja.jpg",
                "zdjecia/zdjecia_rejestr/Holandia.jpg",];
                let index = 0;

                setInterval(() => {
                index = (index + 1) % images.length;
                document.getElementById("slider").src = images[index];
                }, 3000);
                </script>
            </nav>
            
        </div>
    </div>
</body>
</html>
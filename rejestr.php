

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AMTYGI</title>
   <link rel="stylesheet" href="styl_login_and_sign_in.css">
</head>
<body>
   <header>
      <h1><img src="logo.png">AMTYGI - Biuro podróży</h1>
   </header>
   <main>
        <section></section>
        <div>
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
                    if(strlen($pass) == 0 || strlen($logi) == 0 ){
                        echo "Uzupełnij dane!";
                    }
                    elseif(strlen($pass) < 8){
                        echo "Za krótkie hasło";
                    }
                    else{
                        fputs($plik1, $pass);
                        fputs($plik, $logi);
                        $polaczenie = mysqli_connect("localhost", "root", "", "forumZdjec");
                        $zapytanie = "INSERT INTO `uzytkownicy` (`nazwa`, `haslo`) VALUES('$logi', '$pass')";
                        $wynik = mysqli_query($polaczenie, $zapytanie);
                        header('location:strGlowna.php');
                        mysqli_close($polaczenie); 
                    }
                }
            ?>
        </div>
        <section></section>
   </main>
   <nav><img id="slider" src="zdjecie5.jpg" width="600">

    <script>
      const images = ["zdjecie5.jpg", "zdjecie7.jpg", "zdjecie8.jpg"];
      let index = 0;

      setInterval(() => {
        index = (index + 1) % images.length;
        document.getElementById("slider").src = images[index];
      }, 3000); 
    </script></nav>
   <footer>
        <h3> Masz konto? <a href="index.php">Zaloguj się</a></h3>
   </footer>
</body>
</html>
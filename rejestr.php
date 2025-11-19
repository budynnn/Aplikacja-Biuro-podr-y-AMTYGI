

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AMTYGI</title>
</head>
<body>
   <header>
      <h1>AMTYGI - Biuro podróży</h1>
   </header>
   <main>
      <h2>Zarejestruj się</h2>
      <hr><form method="post">
         <input type="text" placeholder="Twoja nazwa" name="nazwa">         
         <input type="email" placeholder="Twój e-mail" name="mail">
         <input type="password" placeholder="Twoje Hasło" name="haslo">
         <input type="submit" value="Utwórz konto">
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
   </footer>
</body>
</html>
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
      <h1><img src="logo.png"> AMTYGI - Biuro podróży</h1>
   </header>
   <main>
       <section></section>
      <div>
         <h2>Zaloguj się</h2>
         <br><form method="post">     
            <input class="input" type="email" placeholder="Twój e-mail" name="mail"><br><br>
            <input class="input" type="password" placeholder="Twoje Hasło" name="haslo"><br><br>
            <input class="przycisk" type="submit" value="Zaloguj się" name="nazwa"><br><br>
         </form>
         <?php
            if(isset($_POST["imie"]) && isset($_POST["pass"])){
                     $plik = fopen("dane.txt", "w+");
                     $plik1 = fopen("dane1.txt", "w+");
                     $logi = $_POST["email"];
                     $pass = $_POST["haslo"];
                     fputs($plik, $logi);
                     fputs($plik1, $pass);
                     $polaczenie = mysqli_connect("localhost", "root", "", "forumZdjec");
                     $zapytanie = "SELECT nazwa FROM uzytkownicy WHERE haslo = '$pass' AND nazwa = '$logi';";
                     $wynik = mysqli_query($polaczenie, $zapytanie);
                     if ($wynik->num_rows > 0) {
                        header('location:strGlowna.php');
                     } else {
                        echo"<p>NIEPOPRAWNIE WPROWADZONE DANE!</p>";
                     }
                     mysqli_close($polaczenie); 
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
      <h3>Nie masz konta? <a href="rejestr.php">Zarejestuj się</a></h3>
   </footer>
</body>
</html>
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
      <h1><img src="logo_bezowe.png"> AMTYGI - Biuro podróży</h1>
   </header>
         <main>
            <section></section>
            <br><br><br>
            <div class="maindiv">
               <h2>Zaloguj się</h2>
               <br><form method="post">     
                  <input class="input" type="email" placeholder="Twój e-mail" name="mail"><br><br>
                  <input class="input" type="password" placeholder="Twoje Hasło" name="haslo"><br><br>
                  <input class="przycisk" type="submit" value="Zaloguj się" ><br><br>
               </form>
               <?php
                  if(isset($_POST["mail"]) && isset($_POST["haslo"])){
                     $mail = $_POST["mail"];
                     $pass = $_POST["haslo"];
                     $polaczenie = mysqli_connect("localhost", "root", "", "kraje");
                     $zapytanie = "SELECT nazwa FROM uzytkownicy WHERE haslo = '$pass' AND email = '$mail';";
                     $wynik = mysqli_query($polaczenie, $zapytanie);
                     if ($wynik->num_rows > 0) {
                        header('location:kraje.php');
                     } else {
                        echo"<p>NIEPOPRAWNIE WPROWADZONE DANE!</p>";
                     }
                     mysqli_close($polaczenie); 
                  }
               ?>
            </div>
            <section></section>
               </main>

         <nav>
         <img id="slider" src="zdjecia/zdjecia_rejestr/Holandia.jpg" width="1000">
            <script>
               const images = ["zdjecia/zdjecia_rejestr/Portugalia.jpg",
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
         <footer>
            <h3>Nie masz konta? <a href="rejestr.php" >Zarejestuj się</a></h3>
         </footer>
</body>
</html>
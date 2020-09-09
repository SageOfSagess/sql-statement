<?php


?>

<html>
  <form action="signup.php" method="post">
    <input type="text" name="vnaam" placeholder="Voornaam" required /><br>
    <input type="text" name="tvoegsel" placeholder="Tussenvoegsel" /><br>
    <input type="text" name="anaam" placeholder="Achternaam" required /><br>
    <input type="email" name="email" placeholder="Email" required /><br>
    <input type="text" name="gnaam" placeholder="Gebruikersnaam" required /><br>
    <input type="password" name="wachtwoord" placeholder="Wachtwoord" required /><br>
    <input type="password" name="cwachtwoord" placeholder="Herhaalwachtwoord" required /><br>
    <input type="submit" value="Sign up" /><br>
    <a href="index.php">ik heb al een account. Login</a>
  </form>
</html>

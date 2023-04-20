<?php
session_unset();
session_destroy();
session_regenerate_id(true);

session_start();

#Create and fill array of players to show up on high score sheet
$bot1 = new Player("Joseph Foy", "Joeboe", "Easy");
$bot2 = new Player("Grace Foy", "Grace", "Easy");
$bot3 = new Player("Ricky Bobby", "RickiBoubi", "Easy");
$bot4 = new Player("Emily McCallum", "Em", "Easy");
$bot5 = new Player("Diarmuid Foy", "Dimrod", "Easy");
$_SESSION['fiveBestPlayers'] = array($bot1, $bot2, $bot3, $bot4, $bot5);

#Create and fill array of hard players to show up on high score sheet
$bot6 = new Player("Adam Burke", "burgers", "Hard");
$bot7 = new Player("Denis Nuwagaba", "Alphaboy", "Hard");
$bot8 = new Player("Brían Foy", "Bríanus", "Hard");
$bot9 = new Player("Jackie Chan", "Jackie", "Hard");
$bot10 = new Player("Patrick Grant", "Paddy G", "Hard");
$_SESSION['fiveBestPlayersHard'] = array($bot6, $bot7, $bot8, $bot9, $bot10);

header("Location: SplashScreen.php");
?>
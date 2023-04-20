<?php
include('Player.php');
session_start();

#Create and fill array of easy players to show up on high score sheet
$bot1 = new Player("Joseph Foy", "Joeboe", "Easy");
$bot2 = new Player("Grace Foy", "Grace", "Easy");
$bot3 = new Player("Ricky Bobby", "RickiBoubi", "Easy");
$bot4 = new Player("Emily McCallum", "Em", "Easy");
$bot5 = new Player("Diarmuid Foy", "Dimrod", "Easy");
if(!isset($_SESSION['fiveBestPlayers'])){
    $_SESSION['fiveBestPlayers'] = array($bot1, $bot2, $bot3, $bot4, $bot5);
}

#Create and fill array of hard players to show up on high score sheet
$bot6 = new Player("Adam Burke", "burgers", "Hard");
$bot7 = new Player("Denis Nuwagaba", "Alphaboy", "Hard");
$bot8 = new Player("Brían Foy", "Bríanus", "Hard");
$bot9 = new Player("Jackie Chan", "Jackie", "Hard");
$bot10 = new Player("Patrick Grant", "Paddy G", "Hard");
if(!isset($_SESSION['fiveBestPlayersHard'])){
    $_SESSION['fiveBestPlayersHard'] = array($bot6, $bot7, $bot8, $bot9, $bot10);
}

# Stop the game and reset
if(isset($_POST['destroy'])){
    session_destroy();
    header("Location: SplashScreen.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ca_styles.css">
</head>
<body>
    <div class="new-game-container">
        <a href="NewGame.php"><button>New Game</button></a><br><br>
        <a href="Instructions.php"><button>Instructions</button></a><br><br>
        <a href="HighScores.php"><button>High Scores</button></a><br><br><br><br><br><br>
        <form method="post">
            <button class="destroy-button" name="destroy">WIPE</button>
        </form>
    </div>
</body>
</html>


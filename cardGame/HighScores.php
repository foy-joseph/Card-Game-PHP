<?php
include('Player.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name = "viewport" content="width=device-width, initial-scale=1.0">
	<title>High Scores</title>
    <link rel="stylesheet" href="ca_styles.css">
</head>
<body>
    <div class="game-over">
        <h1>Easy</h1>
    </div>
    <table class="high-score-table">
        <th>Rank</th><th>Player</th><th>Score</th><th>Date</th>
        <tr><td>1.</td><td><?php echo $_SESSION['fiveBestPlayers'][0]->getNickName();?></td><td><?php echo $_SESSION['fiveBestPlayers'][0]->getHighScore();?></td><td><?php echo $_SESSION['fiveBestPlayers'][0]->getDate();?></td></tr>
        <tr><td>2.</td><td><?php echo $_SESSION['fiveBestPlayers'][1]->getNickName();?></td><td><?php echo $_SESSION['fiveBestPlayers'][1]->getHighScore();?></td><td><?php echo $_SESSION['fiveBestPlayers'][1]->getDate();?></td></tr>
        <tr><td>3.</td><td><?php echo $_SESSION['fiveBestPlayers'][2]->getNickName();?></td><td><?php echo $_SESSION['fiveBestPlayers'][2]->getHighScore();?></td><td><?php echo $_SESSION['fiveBestPlayers'][2]->getDate();?></td></tr>
        <tr><td>4.</td><td><?php echo $_SESSION['fiveBestPlayers'][3]->getNickName();?></td><td><?php echo $_SESSION['fiveBestPlayers'][3]->getHighScore();?></td><td><?php echo $_SESSION['fiveBestPlayers'][3]->getDate();?></td></tr>
        <tr><td>5.</td><td><?php echo $_SESSION['fiveBestPlayers'][4]->getNickName();?></td><td><?php echo $_SESSION['fiveBestPlayers'][4]->getHighScore();?></td><td><?php echo $_SESSION['fiveBestPlayers'][4]->getDate();?></td></tr>
    </table>
    <div class="game-over">
        <h1>Hard</h1>
    </div>
    <table class="high-score-table">
        <th>Rank</th><th>Player</th><th>Score</th><th>Date</th>
        <tr><td>1.</td><td><?php echo $_SESSION['fiveBestPlayersHard'][0]->getNickName();?></td><td><?php echo $_SESSION['fiveBestPlayersHard'][0]->getHighScore();?></td><td><?php echo $_SESSION['fiveBestPlayersHard'][0]->getDate();?></td></tr>
        <tr><td>2.</td><td><?php echo $_SESSION['fiveBestPlayersHard'][1]->getNickName();?></td><td><?php echo $_SESSION['fiveBestPlayersHard'][1]->getHighScore();?></td><td><?php echo $_SESSION['fiveBestPlayersHard'][1]->getDate();?></td></tr>
        <tr><td>3.</td><td><?php echo $_SESSION['fiveBestPlayersHard'][2]->getNickName();?></td><td><?php echo $_SESSION['fiveBestPlayersHard'][2]->getHighScore();?></td><td><?php echo $_SESSION['fiveBestPlayersHard'][2]->getDate();?></td></tr>
        <tr><td>4.</td><td><?php echo $_SESSION['fiveBestPlayersHard'][3]->getNickName();?></td><td><?php echo $_SESSION['fiveBestPlayersHard'][3]->getHighScore();?></td><td><?php echo $_SESSION['fiveBestPlayersHard'][3]->getDate();?></td></tr>
        <tr><td>5.</td><td><?php echo $_SESSION['fiveBestPlayersHard'][4]->getNickName();?></td><td><?php echo $_SESSION['fiveBestPlayersHard'][4]->getHighScore();?></td><td><?php echo $_SESSION['fiveBestPlayersHard'][4]->getDate();?></td></tr>
    </table><br><br>
    <div class="game-over">
        <button ><a href="SplashScreen.php">EXIT</a></button>
    </div>
</body>
</html>



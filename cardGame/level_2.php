<?php
include('cards.php');
include('Player.php');
session_start();
date_default_timezone_set("Europe/Lisbon");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name = "viewport" content="width=device-width, initial-scale=1.0">
	<title>L00155110</title>
    <link rel="stylesheet" href="ca_styles.css">
</head>
<body>
<div class="game-over">
<?php
echo("Player name: " . $_SESSION['currentPlayer']->getName());
?>
<br>
<?php
#hint
if(isset($_POST["hint"])){
    if ($_SESSION['redLocation1'] == 0
     || $_SESSION['redLocation1'] == 1
     || $_SESSION['redLocation1'] == 2
     || $_SESSION['redLocation1'] == 3){
        echo("Card 1 is in the top row!");
    }
    else if ($_SESSION['redLocation1'] == 4
     || $_SESSION['redLocation1'] == 5
     || $_SESSION['redLocation1'] == 6
     || $_SESSION['redLocation1'] == 7){
        echo("Card 1 is in the middle row!");
    }
    else if ($_SESSION['redLocation1'] == 8
     || $_SESSION['redLocation1'] == 9
     || $_SESSION['redLocation1'] == 10
     || $_SESSION['redLocation1'] == 11){
        echo("Card 1 is in the bottom row!");
    }
?>
<br>
<?php
    #card 2 hints
    if ($_SESSION['redLocation2'] == 0
     || $_SESSION['redLocation2'] == 1
     || $_SESSION['redLocation2'] == 2
     || $_SESSION['redLocation2'] == 3){
        echo("Card 2 is in the top row!");
    }
    else if ($_SESSION['redLocation2'] == 4
     || $_SESSION['redLocation2'] == 5
     || $_SESSION['redLocation2'] == 6
     || $_SESSION['redLocation2'] == 7){
        echo("Card 2 is in the middle row!");
    }
    else if ($_SESSION['redLocation2'] == 8
     || $_SESSION['redLocation2'] == 9
     || $_SESSION['redLocation2'] == 10
     || $_SESSION['redLocation2'] == 11){
        echo("Card 2 is in the bottom row!");
    }
}
?>
<br><br>
</div>
<?php

# play level 2
if(array_key_exists('c0', $_POST) && $_POST['c0']=='on'){
    $_SESSION['cardsDisplayed'][0] = $_SESSION['faces2'][0];
    $_SESSION['counter']++;
}
else if(array_key_exists('c1', $_POST) && $_POST['c1']=='on'){
    $_SESSION['cardsDisplayed'][1] = $_SESSION['faces2'][1];
    $_SESSION['counter']++;
}
else if(array_key_exists('c2', $_POST) && $_POST['c2']=='on'){
    $_SESSION['cardsDisplayed'][2] = $_SESSION['faces2'][2];
    $_SESSION['counter']++;
}
else if(array_key_exists('c3', $_POST) && $_POST['c3']=='on'){
    $_SESSION['cardsDisplayed'][3] = $_SESSION['faces2'][3];
    $_SESSION['counter']++;
}
else if(array_key_exists('c4', $_POST) && $_POST['c4']=='on'){
    $_SESSION['cardsDisplayed'][4] = $_SESSION['faces2'][4];
    $_SESSION['counter']++;
}
else if(array_key_exists('c5', $_POST) && $_POST['c5']=='on'){
    $_SESSION['cardsDisplayed'][5] = $_SESSION['faces2'][5];
    $_SESSION['counter']++;
}
else if(array_key_exists('c6', $_POST) && $_POST['c6']=='on'){
    $_SESSION['cardsDisplayed'][6] = $_SESSION['faces2'][6];
    $_SESSION['counter']++;
}
else if(array_key_exists('c7', $_POST) && $_POST['c7']=='on'){
    $_SESSION['cardsDisplayed'][7] = $_SESSION['faces2'][7];
    $_SESSION['counter']++;
}
else if(array_key_exists('c8', $_POST) && $_POST['c8']=='on'){
    $_SESSION['cardsDisplayed'][8] = $_SESSION['faces2'][8];
    $_SESSION['counter']++;
}
else if(array_key_exists('c9', $_POST) && $_POST['c9']=='on'){
    $_SESSION['cardsDisplayed'][9] = $_SESSION['faces2'][9];
    $_SESSION['counter']++;
}
else if(array_key_exists('c10', $_POST) && $_POST['c10']=='on'){
    $_SESSION['cardsDisplayed'][10] = $_SESSION['faces2'][10];
    $_SESSION['counter']++;
}
else if(array_key_exists('c11', $_POST) && $_POST['c11']=='on'){
    $_SESSION['cardsDisplayed'][11] = $_SESSION['faces2'][11];
    $_SESSION['counter']++;;
}

#check if any of the cards displayed are red
foreach ($_SESSION['cardsDisplayed'] as $card){
    if($card->getColour() === 'red'){
        $_SESSION['redsFound']++;
    }
    if($_SESSION['redsFound']==2){
        if ($_SESSION['counter'] < $_SESSION['fiveBestPlayersHard'][0]->getHighScore()) {
            $_SESSION['currentPlayer']->setHighScore($_SESSION['counter']);
            # move existing records down the ladder;
            $_SESSION['fiveBestPlayersHard'][4]=$_SESSION['fiveBestPlayersHard'][3];
            $_SESSION['fiveBestPlayersHard'][3]=$_SESSION['fiveBestPlayersHard'][2];
            $_SESSION['fiveBestPlayersHard'][2]=$_SESSION['fiveBestPlayersHard'][1];
            $_SESSION['fiveBestPlayersHard'][1]=$_SESSION['fiveBestPlayersHard'][0];
            $_SESSION['fiveBestPlayersHard'][0]=$_SESSION['currentPlayer'];
            $date = (date("d/m/Y H:i"));
            $_SESSION['currentPlayer']->setDate($date);
        }
        else if ($_SESSION['counter'] < $_SESSION['fiveBestPlayersHard'][1]->getHighScore()){
            $_SESSION['currentPlayer']->setHighScore($_SESSION['counter']);
            # move existing records down the ladder;
            $_SESSION['fiveBestPlayersHard'][4]=$_SESSION['fiveBestPlayersHard'][3];
            $_SESSION['fiveBestPlayersHard'][3]=$_SESSION['fiveBestPlayersHard'][2];
            $_SESSION['fiveBestPlayersHard'][2]=$_SESSION['fiveBestPlayersHard'][1];
            $_SESSION['fiveBestPlayersHard'][1]=$_SESSION['currentPlayer'];
            $date = (date("d/m/Y H:i"));
            $_SESSION['currentPlayer']->setDate($date);
        }
        else if ($_SESSION['counter'] < $_SESSION['fiveBestPlayersHard'][2]->getHighScore()) {
            $_SESSION['currentPlayer']->setHighScore($_SESSION['counter']);
            # move existing records down the ladder;
            $_SESSION['fiveBestPlayersHard'][4]=$_SESSION['fiveBestPlayersHard'][3];
            $_SESSION['fiveBestPlayersHard'][3]=$_SESSION['fiveBestPlayersHard'][2];
            $_SESSION['fiveBestPlayersHard'][2]=$_SESSION['currentPlayer'];
            $date = (date("d/m/Y H:i"));
            $_SESSION['currentPlayer']->setDate($date);
        }
        else if ($_SESSION['counter'] < $_SESSION['fiveBestPlayersHard'][3]->getHighScore()) {
            $_SESSION['currentPlayer']->setHighScore($_SESSION['counter']);
            # move existing records down the ladder;
            $_SESSION['fiveBestPlayersHard'][4]=$_SESSION['fiveBestPlayersHard'][3];
            $_SESSION['fiveBestPlayersHard'][3]=$_SESSION['currentPlayer'];
            $date = (date("d/m/Y H:i"));
            $_SESSION['currentPlayer']->setDate($date);
        }
        else if ($_SESSION['counter'] < $_SESSION['fiveBestPlayersHard'][4]->getHighScore()) {
            $_SESSION['currentPlayer']->setHighScore($_SESSION['counter']);
            $_SESSION['fiveBestPlayersHard'][4]=$_SESSION['currentPlayer'];
            $date = (date("d/m/Y H:i"));
            $_SESSION['currentPlayer']->setDate($date);
        }
        header("Refresh:2; GameOver.php");
    }
}
?>

<div>
    
</div>
<table class="cards">
    <form method="post">
        <tr>
            <td><input type="checkbox" class="checkbox" name="c0" id="c0" alt="back!" <?php echo $_SESSION['cardsDisplayed'][0]->getSrcString()?>>
            <label for="c0"><br><img <?php echo $_SESSION['cardsDisplayed'][0]->getSrcString()?> class = "cards c0 "></label></td>
            <td><input type="checkbox" class="checkbox" name="c1" id="c1" alt="back!" <?php echo $_SESSION['cardsDisplayed'][1]->getSrcString()?>>
            <label for="c1"><br><img <?php echo $_SESSION['cardsDisplayed'][1]->getSrcString()?> class = "cards c1"></label></td>
            <td><input type="checkbox" class="checkbox" name="c2" id="c2" alt="back!" <?php echo $_SESSION['cardsDisplayed'][2]->getSrcString()?>>
            <label for="c2"><br><img <?php echo $_SESSION['cardsDisplayed'][2]->getSrcString()?> class = "cards c2"></label></td>
            <td><input type="checkbox" class="checkbox" name="c3" id="c3" alt="back!" <?php echo $_SESSION['cardsDisplayed'][3]->getSrcString()?>>
            <label for="c3"><br><img <?php echo $_SESSION['cardsDisplayed'][3]->getSrcString()?> class = "cards c3"></label></td>
        </tr>
        <tr>
            <td><input type="checkbox" class="checkbox" name="c4" id="c4" alt="back!" <?php echo $_SESSION['cardsDisplayed'][4]->getSrcString()?>>
            <label for="c4"><br><img <?php echo $_SESSION['cardsDisplayed'][4]->getSrcString()?> class = "cards c4"></label></td>
            <td><input type="checkbox" class="checkbox" name="c5" id="c5" alt="back!" <?php echo $_SESSION['cardsDisplayed'][5]->getSrcString()?>>
            <label for="c5"><br><img <?php echo $_SESSION['cardsDisplayed'][5]->getSrcString()?> class = "cards c5"></label></td>
            <td><input type="checkbox" class="checkbox" name="c6" id="c6" alt="back!" <?php echo $_SESSION['cardsDisplayed'][6]->getSrcString()?>>
            <label for="c6"><br><img <?php echo $_SESSION['cardsDisplayed'][6]->getSrcString()?> class = "cards c6"></label></td>
            <td><input type="checkbox" class="checkbox" name="c7" id="c7" alt="back!" <?php echo $_SESSION['cardsDisplayed'][7]->getSrcString()?>>
            <label for="c7"><br><img <?php echo $_SESSION['cardsDisplayed'][7]->getSrcString()?> class = "cards c7"></label></td>
        </tr>
        <tr>
            <td><input type="checkbox" class="checkbox" name="c8" id="c8" alt="back!" <?php echo $_SESSION['cardsDisplayed'][8]->getSrcString()?>>
            <label for="c8"><br><img <?php echo $_SESSION['cardsDisplayed'][8]->getSrcString()?> class = "cards c8"></label></td>
            <td><input type="checkbox" class="checkbox" name="c9" id="c9" alt="back!" <?php echo $_SESSION['cardsDisplayed'][9]->getSrcString()?>>
            <label for="c9"><br><img <?php echo $_SESSION['cardsDisplayed'][9]->getSrcString()?> class = "cards c9"></label></td>
            <td><input type="checkbox" class="checkbox" name="c10" id="c10" alt="back!" <?php echo $_SESSION['cardsDisplayed'][10]->getSrcString()?>>
            <label for="c10"><br><img <?php echo $_SESSION['cardsDisplayed'][10]->getSrcString()?> class = "cards c10"></label></td>
            <td><input type="checkbox" class="checkbox" name="c11" id="c11" alt="back!" <?php echo $_SESSION['cardsDisplayed'][11]->getSrcString()?>>
            <label for="c11"><br><img <?php echo $_SESSION['cardsDisplayed'][11]->getSrcString()?> class = "cards c11"></label></td>
        </tr>
        <tr>
            <td colspan="2">
                <button><input type="submit" class= "flip-button" name="cards" value="Flip Card"></button>
            </td>
            <td colspan="2">
                <button><input type="submit" method="post" name="hint" class= "flip-button" value="Hint"></button>
            </td>
        </tr>
    </form>
</table>
<div class="game-over">  
    <?php echo "CLICKS: " . $_SESSION['counter'];?>
</div>
</body>
</html>
<?php
include("cards.php");
session_start();

#create quick-codes for easier and quicker code later
$size = 'height = "200" width="150" ';
$red = 'src = "CAimg/red.png" ';
$blue = 'src = "CAimg/blue.png" ';
$back = 'src = "CAimg/card-back.png" ';

#create objects of blue and red cards
$blueOb = new Card('blue', $blue);
$redOb = new Card('red', $red);
$backOb = new Card('back', $back);

#create array for lvl1 fronts
$arrayOfFaces1 = array($redOb);
for($i=1;$i<12;$i++){
    $arrayOfFaces1[$i]=$blueOb;
} shuffle($arrayOfFaces1);
$_SESSION['faces1']=$arrayOfFaces1;

#create an index value for the red card to be found later.
$_SESSION['redLocation']=0;

# create & fill session array of displaying cards
$_SESSION['cardsDisplayed']=array();
for($i=0;$i<12;$i++){
    $_SESSION['cardsDisplayed'][$i]=$backOb;
    if($_SESSION['faces1'][$i]->getColour() === 'red'){
        $_SESSION['redLocation']=$i;
    }
}
# create a counter and set to zero
$_SESSION['counter']=0;

header("Location: level_1.php");
?>
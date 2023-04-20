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

#create array for lvl2 fronts
$arrayOfFaces2 = array($redOb, $redOb);
for($i=2;$i<12;$i++){
    $arrayOfFaces2[$i]=$blueOb;
} shuffle($arrayOfFaces2);
$_SESSION['faces2']=$arrayOfFaces2;

#create an index value for the red cards to be found later.
$_SESSION['redLocation1']=-1;
$_SESSION['redLocation2']=-1;

# create & fill session array of displaying cards
$_SESSION['cardsDisplayed']=array();
for($i=0;$i<12;$i++){
    $_SESSION['cardsDisplayed'][$i]=$backOb;
}

#find the red cards
for($i=0;$i<12;$i++){
    if($_SESSION['faces2'][$i]->getColour() === 'red'){
        $_SESSION['redLocation1']=$i;
        break;
    }
    
}
for($i=11;$i>=0;$i--){ # find the second card by working backwards.
    if($_SESSION['faces2'][$i]->getColour() === 'red'){
        $_SESSION['redLocation2']=$i;
        break;
    }
}

# create a click counter and set to zero
$_SESSION['counter']=0;

# create a reds found counter and set to zero
$_SESSION['redsFound']=0;


header("Location: level_2.php");
?>
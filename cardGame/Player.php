<?php

class Player{ #Create object for User
    var $userName;
    var $nickName;
    var $highScore;
    var $difficulty;
    var $date;

    function __construct($nameIn, $nickNameIn, $difficultyIn){
        $this->userName = $nameIn;
        $this->nickName = $nickNameIn;
        $this->highScore = 999;
        $this->difficulty = $difficultyIn;
        $this->date="1-1-2000 00:00";
    }
    function getName(){
        return $this->userName;
    }
    function getNickName(){
        return $this->nickName;
    }
    function setHighScore($newScore){
        $this->highScore = $newScore;
    }
    function getHighScore(){
        return $this->highScore;
    }
    function getDifficulty(){
        return $this->difficulty;
    }
    function setDate($dateIn){
        $this->date=$dateIn;
    }
    function getDate(){
        return $this->date;
    }
}

?>
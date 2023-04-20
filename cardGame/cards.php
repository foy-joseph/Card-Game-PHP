<?php

class Card{
    var $colour;
    var $srcString;

    function __construct($colourIn, $srcStringIn){
        $this->colour = $colourIn;
        $this->srcString = $srcStringIn;
    }

    function getSrcString(){
        return $this->srcString;
    }
    function getColour(){
        return $this->colour;
    }
}

?>
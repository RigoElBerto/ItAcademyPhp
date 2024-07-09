<?php
class PokerDice {
    private $figure = ["As", "K", "Q", "J", "8", "7"];
    private $lastFigure = "";
    static $counter = 0;

    public function Throw(){
        $num = rand(0, count($this->figure) -1);
        $this->lastFigure = $this->figure[$num];
    }

    public function shapeName(){
        return $this->lastFigure;
    }

}
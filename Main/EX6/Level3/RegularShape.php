<?php

abstract class RegularShape{

    protected $base;
    protected $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

}
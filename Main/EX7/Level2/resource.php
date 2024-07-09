<?php

include 'theme.php';
include 'type.php';
class Resource{
private $name;
private $url;
private $theme;
private $type;

public function __construct($name, Theme $theme, $url,Type $type){
    $this->name = $name;
    $this->theme = $theme;
    $this->url = $url;
    $this->type = $type;
}

public function __tostring(){

    return "Name: " . $this->name ."<br>Theme: ". $this->theme->name() ."<br>URL: ". $this->url ."<br> Type: ". $this->type->name();
}

}
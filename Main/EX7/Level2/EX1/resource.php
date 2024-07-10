<?php

include 'theme.php';
include 'type.php';
class Resource{
private $name;
private $url;
private $theme;
private $type;

public function __construct(String $name, Theme $theme, String $url, Type $type){
    $this->name = $name;
    $this->theme = $theme;
    $this->url = $url;
    $this->type = $type;
}

public function __tostring(): string{

    return "Name: " . $this->name ."<br>Theme: ". $this->theme->value ."<br>URL: ". $this->url ."<br> Type: ". $this->type->value;
}

}
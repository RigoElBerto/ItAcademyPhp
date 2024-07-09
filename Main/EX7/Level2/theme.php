<?php

enum Theme{
    case PHP;
    case CSS;
    case HTML;
    case SQL;
    case LARAVEL;


    public function name(){
        return match ($this) {
            Theme::PHP => "Php",
            Theme::CSS => "Css",
            Theme::HTML => "Html",
            Theme::SQL => "Sql",
            Theme::LARAVEL => "Laravel",


        };
    }
}
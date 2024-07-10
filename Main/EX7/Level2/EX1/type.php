<?php

enum Type{
    case FILE;
    case ARTICLE;
    case VIDEO;


    public function name(){
        return match ($this) {
            Self::FILE => "File",
            Type::ARTICLE =>"Article",
            Type::VIDEO => "Video",

        };
    }
}
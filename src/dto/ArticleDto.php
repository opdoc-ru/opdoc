<?php

namespace src\dto;

class ArticleDto extends BaseDto
{
    public $slug;

    public $title;

    public $date;

    public $content;

    public function url() : string
    {
        return '/articles/' . $this->slug;
    }
}
<?php

namespace src\dto;

class ReferenceDto
{
    public $name;

    public $icon;

    public $description;

    public $path;

    public function url()
    {
        return '/references/' . trim($this->path, '/');
    }
}
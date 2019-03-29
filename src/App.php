<?php

namespace src;

use src\dto\ArticleDto;
use Symfony\Component\Yaml\Yaml;

class App
{
    const ARTICLES_DIR = __DIR__ . '/../docs/articles';
    const REFERENCES_DIR = __DIR__ . '/../docs/references';

    /**
     * Читает манифест документации и парсит ее в DTO объект
     * @param string $path
     * @param string $dtoClassName
     * @return mixed
     */
    public static function maniphest(string $path)
    {
        $yml = Yaml::parseFile($path . '/maniphest.yaml');
        $parsedown = new \Parsedown();

        $dtoClassName = '\\src\\dto\\' . $yml['dto'];
        unset($yml['dto']);

        $dto = new $dtoClassName;

        foreach ($yml as $key => &$property) {
            if (is_string($property) && substr($property, -3) == '.md') {
                $property = $parsedown->parse(file_get_contents($path . '/' . $property));
            }

            $dto->$key = $property;
        }

        return $dto;
    }

    /**
     * @return ArticleDto[]
     */
    public static function articles()
    {
        $articles = [];

        foreach (glob(self::ARTICLES_DIR . '/*') as $folder) {
            $articles[] = self::maniphest($folder, ArticleDto::class);
        }

        return $articles;
    }

    /**
     * @param string $name
     * @return bool|ArticleDto
     */
    public static function article(string $name)
    {
        if (!is_dir($path = self::ARTICLES_DIR . '/' . basename($name))) {
            return false;
        }

        return self::maniphest($path, ArticleDto::class);
    }

    public static function references(string $path)
    {
        $references = [];

        foreach (glob(self::REFERENCES_DIR . '/' . self::getAbsolutePath($path) . '/*') as $folder) {
            $references[] = self::maniphest($folder);
        }

        return $references;
    }

    private function getAbsolutePath($path) {
        $path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $path);
        $parts = array_filter(explode(DIRECTORY_SEPARATOR, $path), 'strlen');
        $absolutes = array();
        foreach ($parts as $part) {
            if ('.' == $part) continue;
            if ('..' == $part) {
                array_pop($absolutes);
            } else {
                $absolutes[] = $part;
            }
        }
        return implode(DIRECTORY_SEPARATOR, $absolutes);
    }
}
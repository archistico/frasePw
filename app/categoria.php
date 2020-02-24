<?php

namespace App;

class Categoria
{
    private $categoria = [];

    public function __construct(String $filename)
    {
        $fn = fopen($filename,"r");

        while(! feof($fn))  {
            $this->categoria[] = fgets($fn);
        }

        fclose($fn);
    }

    public function countValues()
    {
        return count($this->categoria);
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
}
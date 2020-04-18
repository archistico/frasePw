<?php

namespace App;

class Categoria
{
    private $categoria = [];
    private $filename;

    public function __construct(String $filename)
    {
        $nome = str_replace("txt", "", $filename);
        $nome = str_replace(".", "", $nome);
        $nome = str_replace(DIRECTORY_SEPARATOR, "", $nome);
        $this->filename = ucfirst($nome);
        $fn = fopen($filename,"r");

        while(! feof($fn))  {
            $this->categoria[] = fgets($fn);
        }

        fclose($fn);
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getFilename()
    {
        return $this->filename;
    }
}
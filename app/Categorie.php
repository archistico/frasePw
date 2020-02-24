<?php

namespace App;

class Categorie
{
    private $categorie;

    public function __construct()
    {
        $this->categorie = [];
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function add(\App\Categoria $cat)
    {
        $this->categorie[] = $cat->getCategoria();
    }
}

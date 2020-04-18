<?php

namespace App;

class Categorie
{
    private $categorie;

    public function __construct()
    {
        $this->categorie = [];
        $this->filename = [];
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function add(\App\Categoria $cat)
    {
        $this->categorie[] = $cat->getCategoria();
        $this->filename[] = $cat->getFilename();
    }

    public function numeroTotaleParole()
    {
        $totale = 0;
        foreach ($this->categorie as $cat) {
            $totale += count($cat);
        }
        return $totale;
    }

    public function numeroTotaleParoleCategorie()
    {
        $risposta = [];
        foreach ($this->categorie as $cat) {
            $risposta[] = count($cat);
        }
        return $risposta;
    }

}

<?php

namespace App;

class Passphrase
{
    private $categorie;

    public function __construct(\App\Categorie $categorie)
    {
        $this->categorie = $categorie->getCategorie();
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function getPassword(int $parole)
    {
        $arr = $this->categorie;
        $parole_array = [];

        for($c = 0; $c < $parole; $c++)
        {

            // Per ogni parola
            $numero_categorie = count($arr);
            $indice_categoria = rand(0, $numero_categorie-1);
            $categoria = $arr[$indice_categoria];

            // Trovo la parola
            $numero_parole = count($categoria);
            $indice_parola = rand(0, $numero_parole-1);
            $parola = $categoria[$indice_parola];

            $parole_array[] = ucfirst(trim($parola));

            // Tolgo la categoria selezionata
            \array_splice($arr, $indice_categoria, 1);
        }

        $ret = join("", $parole_array);

        return $ret;
    }
}

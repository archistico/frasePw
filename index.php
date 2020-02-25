<?php
require 'vendor/autoload.php';

use \App\Html;
use \App\CategoriaTipo;
use \App\Passphrase;

Html::head();

$cat1 = new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'aggettivi.txt');
$cat2 = new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'animali.txt');
$cat3 = new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'citta.txt');
$cat4 = new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'locuzioni.txt');
$cat5 = new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'mestieri.txt');
$cat6 = new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'nomi.txt');
$cat7 = new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'piante.txt');
$cat8 = new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'sostantivi.txt');
$cat9 = new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'verbi.txt');
$cat10 = new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'capitali.txt');

$categorie = new \App\Categorie();
$categorie->add($cat1);
$categorie->add($cat2);
$categorie->add($cat3);
$categorie->add($cat4);
$categorie->add($cat5);
$categorie->add($cat6);
$categorie->add($cat7);
$categorie->add($cat8);
$categorie->add($cat9);
$categorie->add($cat10);

$pf = new Passphrase($categorie);
$intestazione = ["Frase", "Lunghezza"];

Html::printH1("3 parole");
$parole = [];
for($c = 0; $c<10; $c++) {
    $frase = $pf->getPassword(3);
    $lunghezza = strlen($frase);
    $parole[] = [$frase, $lunghezza];
}
Html::table($intestazione, $parole);

Html::printH1("4 parole");
$parole = [];
for($c = 0; $c<10; $c++) {
    $frase = $pf->getPassword(4);
    $lunghezza = strlen($frase);
    $parole[] = [$frase, $lunghezza];
}
Html::table($intestazione, $parole);

Html::printH1("5 parole");
$parole = [];
for($c = 0; $c<10; $c++) {
    $frase = $pf->getPassword(5);
    $lunghezza = strlen($frase);
    $parole[] = [$frase, $lunghezza];
}
Html::table($intestazione, $parole);

Html::printH1("6 parole");
$parole = [];
for($c = 0; $c<10; $c++) {
    $frase = $pf->getPassword(6);
    $lunghezza = strlen($frase);
    $parole[] = [$frase, $lunghezza];
}
Html::table($intestazione, $parole);

Html::foot();
?>


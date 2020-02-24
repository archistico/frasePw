<?php
require 'vendor/autoload.php';

use \App\Html;
use \App\CategoriaTipo;
use \App\Passphrase;

Html::head();

$cat1 = new \App\Categoria('txt/aggettivi.txt');
$cat2 = new \App\Categoria('txt/animali.txt');
$cat3 = new \App\Categoria('txt/citta.txt');
$cat4 = new \App\Categoria('txt/locuzioni.txt');
$cat5 = new \App\Categoria('txt/mestieri.txt');
$cat6 = new \App\Categoria('txt/nomi.txt');
$cat7 = new \App\Categoria('txt/piante.txt');
$cat8 = new \App\Categoria('txt/sostantivi.txt');
$cat9 = new \App\Categoria('txt/verbi.txt');
$cat10 = new \App\Categoria('txt/capitali.txt');

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

Html::printH1("3 parole");
for($c = 0; $c<10; $c++) {
    Html::println($pf->getPassword(3));
}

Html::printH1("4 parole");
for($c = 0; $c<10; $c++) {
    Html::println($pf->getPassword(4));
}

Html::printH1("5 parole");
for($c = 0; $c<10; $c++) {
    Html::println($pf->getPassword(5));
}

Html::printH1("6 parole");
for($c = 0; $c<10; $c++) {
    Html::println($pf->getPassword(6));
}

sleep(1);

Html::foot();
?>


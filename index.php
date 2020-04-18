<?php
require 'vendor/autoload.php';

use \App\Html;
use \App\Passphrase;

Html::head();

$categorie = new \App\Categorie();
$categorie->add(new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'aggettivi.txt'));
$categorie->add(new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'animali.txt'));
$categorie->add(new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'citta.txt'));
$categorie->add(new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'locuzioni.txt'));
$categorie->add(new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'mestieri.txt'));
$categorie->add(new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'nomi.txt'));
$categorie->add(new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'piante.txt'));
$categorie->add(new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'sostantivi.txt'));
$categorie->add(new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'verbi.txt'));
$categorie->add(new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'capitali.txt'));
$categorie->add(new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'stati.txt'));
$categorie->add(new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'cartoni.txt'));
$categorie->add(new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'film.txt'));
$categorie->add(new \App\Categoria('txt'.DIRECTORY_SEPARATOR.'serietv.txt'));

$pf = new Passphrase($categorie);
$intestazione = ["Frase", "Lunghezza"];

Html::printH1("CREAZIONE FRASE DI PASSWORD");

Html::println("Totale parole nel database: ".$categorie->numeroTotaleParole());
Html::verticalSpace(4);

Html::tableSimple($categorie->getFilename(), $categorie->numeroTotaleParoleCategorie());

Html::printH2("3 parole");
$parole = [];
for($c = 0; $c<10; $c++) {
    $frase = $pf->getPassword(3);
    $lunghezza = strlen($frase);
    $parole[] = [$frase, $lunghezza];
}
Html::table($intestazione, $parole);

Html::printH2("4 parole");
$parole = [];
for($c = 0; $c<10; $c++) {
    $frase = $pf->getPassword(4);
    $lunghezza = strlen($frase);
    $parole[] = [$frase, $lunghezza];
}
Html::table($intestazione, $parole);

Html::printH2("5 parole");
$parole = [];
for($c = 0; $c<10; $c++) {
    $frase = $pf->getPassword(5);
    $lunghezza = strlen($frase);
    $parole[] = [$frase, $lunghezza];
}
Html::table($intestazione, $parole);

Html::foot();
?>


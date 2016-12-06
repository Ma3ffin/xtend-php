<?php
include('Rezept\Bild.php');
include('Rezept\Einheit.php');
include('Rezept\Menge.php');
include('Rezept\Rezept.php');
include('Rezept\Schritt.php');
include('Rezept\Servierbeschreibung.php');
include('Rezept\Verwandterezepte.php');
include('Rezept\Zutat.php');
include('Rezept\Zutatenstufe.php');

include('Community\Action.php');
include('Community\RezeptBearbeiten.php');
include('Community\RezeptBewerten.php');
include('Community\RezeptView.php');
include('Community\User.php');
include('Community\Rolle.php');

use Rezept\Bild;
use Rezept\Einheit;
use Rezept\Menge;
use Rezept\Rezept;
use Rezept\Schritt;
use Rezept\Servierbeschreibung;
use Rezept\Verwandterezepte;
use Rezept\Zutat;
use Rezept\Zutatenstufe;

use Community\Action;
use Community\Rolle;
use Community\RezeptBearbeiten;
use Community\RezeptBewerten;
use Community\RezeptView;
use Community\User;

/**
 * Created by PhpStorm.
 * User: mwoller
 * Date: 06.12.2016
 * Time: 16:42
 */

$testbild = new Bild();
$toastbildbeschreibung = new Servierbeschreibung();

$toastbildbeschreibung->setName("toastbild");
$toastbildbeschreibung->setText("So sollte man den Toast anrichten");

$testbild->setName("Toastbild");
$testbild->setBeschreibung("Das ist ein Toast");
$testbild->setPfad("bild.jpg");
$testbild->setServierbeschreibung($toastbildbeschreibung);

echo $testbild->getServierbeschreibung()->getText();
echo "\n";

$gekocht = new Zutatenstufe();
$kaese = new Zutat();
$toast = new Zutat();

$toast->setName("Toast");
$toast->setMenge(new Menge(2,Einheit::stueck));

$kaese->setName("Kaese");
$kaese->setMenge(new Menge(3,Einheit::g));

$gekocht->setName("Gekocht");
$gekocht->setZutaten(array($toast,$kaese));

foreach ($gekocht->getZutaten() as $zutat){
    echo $zutat->getName();
    echo "\n";
}

$user = new User();

$edit = new RezeptBearbeiten();
$view = new RezeptView();

$view->setName("View");
$edit->setName("Edit");


$user->setActions(array($edit,$view));
$user->setRolle(Rolle::gast);

echo $user->getRolle() . "\n";
foreach ($user->getActions() as $action){
    echo $action->getName() . " " . $action->canExecute($user);
    echo "\n";
}


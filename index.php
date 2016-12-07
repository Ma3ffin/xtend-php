<?php
require_once('Rezept\Bild.php');
require_once('Rezept\Einheit.php');
require_once('Rezept\Menge.php');
require_once('Rezept\Rezept.php');
require_once('Rezept\Schritt.php');
require_once('Rezept\Servierbeschreibung.php');
require_once('Rezept\Verwandterezepte.php');
require_once('Rezept\Zutat.php');
require_once('Rezept\Zutatenstufe.php');

require_once('Community\Action.php');
require_once('Community\RezeptBearbeiten.php');
require_once('Community\RezeptBewerten.php');
require_once('Community\RezeptView.php');
require_once('Community\RezeptList.php');
require_once('Community\RezeptNeu.php');
require_once('Community\ChangeUserRolle.php');
require_once('Community\User.php');
require_once('Community\Rolle.php');
require_once('..\src-gen\instances.php');

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
use Community\RezeptNeu;
use Community\RezeptList;
use Community\ChangeUserRolle;
use Community\User;


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


foreach($userlist as $user){
    echo $user->getName() ." " . $user->getNeu()->execute($user) . "\n";
}



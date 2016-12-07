<?php
require_once('..\xtend-php\Rezept\Bild.php');
require_once('..\xtend-php\Rezept\Rezept.php');
require_once('..\xtend-php\Rezept\Zutatenstufe.php');
require_once('..\xtend-php\Community\Action.php');
require_once('..\xtend-php\Community\RezeptBearbeiten.php');
require_once('..\xtend-php\Community\RezeptBewerten.php');
require_once('..\xtend-php\Community\RezeptView.php');
require_once('..\xtend-php\Community\RezeptList.php');
require_once('..\xtend-php\Community\RezeptNeu.php');
require_once('..\xtend-php\Community\ChangeUserRolle.php');
require_once('..\xtend-php\Community\User.php');
require_once('..\xtend-php\Community\Rolle.php');
use Rezept\Bild;
use Rezept\Rezept;
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

$userlist = array(new User("Martin","1234",Rolle::admin),new User("Klaudia","test",Rolle::gast),new User("Stefan","krokodil",Rolle::editor),new User("Tanja","4587321",Rolle::mitglied));

$rezeptlist = array();

$Kaese = new Zutat("Kaese", "Gouda", "2 g");
$Toast = new Zutat("Toast", "Toastbrot", "2 stueck");
$Eier = new Zutat("Eier", "Freilandeier", "2 stueck");
$Schnittlauch = new Zutat("Schnittlauch", "Schnittlauch", "5 mg");
$steps = array(new Zutatenstufe("vorgeschnitten", "Bereits geschnittene Zutaten ", array($Toast)),new Zutatenstufe("ungeschnitten", "Nicht geschnittene Zutaten", array($Kaese)));
$pics = array(new Bild("Mit ketchup servieren", "../images/toast.jpg"));
$zutaten = array($Kaese,$Toast);
array_push($rezeptlist, new Rezept("KaeseToast", "Ein Toast mit Kaese darauf",$zutaten , $steps, $pics));$steps = array(new Zutatenstufe("amstueck", "Zutat liegt im ganzen vor", array($Kaese,$Eier,$Schnittlauch)));
$pics = array(new Bild("Schoen anrichten", "../images/omlet.jpg"));
$zutaten = array($Kaese,$Eier,$Schnittlauch);
array_push($rezeptlist, new Rezept("KaeseOmlet", "Ein Omlet mit Kaese ",$zutaten , $steps, $pics));

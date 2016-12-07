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


$userlist = array(new User("Martin","1234",Rolle::admin),new User("Klaudia","test",Rolle::gast),new User("Stefan","krokodil",Rolle::editor),new User("Tanja","4587321",Rolle::mitglied));
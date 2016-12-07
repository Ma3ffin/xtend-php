<?php
require_once('Rezept\Bild.php');
require_once('Rezept\Rezept.php');
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


foreach($userlist as $user){
    echo $user->getName() ." " . $user->getNeu()->execute($user) . "\n";
}



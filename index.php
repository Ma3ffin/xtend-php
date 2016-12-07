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

$stop = true;
while($stop){

    $repeat = true;
    while($repeat){
        $u = 0;
        foreach($userlist as $user){
            $u++;
            echo $u .". ". $user->getName(). "\n";
        }
        echo "\n";
        echo "Select a User: ";
        $pickeduserID = readline("");
        echo "\n";
        if($pickeduserID <= $u && $pickeduserID > 0 && is_numeric($pickeduserID)){
            $repeat = false;
        }
    }

    $repeat = true;
    while($repeat){
        $u = 0;
        foreach($rezeptlist as $rezept){
            $u++;
            echo $u .". ". $rezept->getName(). "\n";
        }
        echo "\n";
        echo "Select a Rezept: ";
        $pickedrezeptID = readline("");
        echo "\n";
        if($pickedrezeptID <= $u && $pickedrezeptID > 0 && is_numeric($pickedrezeptID)){
            $repeat = false;
        }
    }

    $pickeduser = $userlist[$pickeduserID-1];

    echo "\n".$pickeduser->getName() ." has the role " . $pickeduser->getRolle();
    echo "\nPermissions:\n";
    echo "Add Rezept: ".boolToString($pickeduser->getNeu()->canExecute($user)) . "\n";
    echo "Edit Rezept: ".boolToString($pickeduser->getEdit()->canExecute($user)) . "\n";
    echo "View Rezept: ".boolToString($pickeduser->getView()->canExecute($user)) . "\n";
    echo "List Rezepte: ".boolToString($pickeduser->getList()->canExecute($user)) . "\n";
    echo "Rate Rezept: ".boolToString($pickeduser->getRate()->canExecute($user)) . "\n";
    echo "Change User Role: ".boolToString($pickeduser->getChangerole()->canExecute($user)) . "\n\n";

    $pickedrezept = $rezeptlist[$pickedrezeptID-1];


    $pickeduser->getView()->setRezept($pickedrezept);
    echo $pickeduser->getView()->execute($pickeduser) . "\n";

    $pickeduser->getEdit()->setRezept($pickedrezept);
    echo $pickeduser->getEdit()->execute($pickeduser) . "\n";


    $pickeduser->getRate()->setRezept($pickedrezept);

    $repeat = true;
    while($repeat){
        echo "\n";
        echo "Insert Rating for ".$pickeduser->getRate()->getRezept()->getName().": ";
        $rate = readline("");
        echo "\n";
        if($rate <= 5 && $rate >= 0 && is_numeric($rate)){
            $repeat = false;
        }
    }
    $pickeduser->getRate()->setBewertung($rate);

    echo $pickeduser->getRate()->execute($pickeduser) . "\n";

    echo "Stop Program?(y/n): ";
    $line = readline("");
    if($line == "y"){
        $stop = false;
    }
}

function boolToString($bool){
    if($bool){
        return "YES";
    }
    return "NO";
}
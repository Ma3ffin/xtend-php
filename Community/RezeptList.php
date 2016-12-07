<?php
namespace Community;
/**
 * Created by PhpStorm.
 * User: mwoller
 * Date: 06.12.2016
 * Time: 18:53
 */
class RezeptList extends Action
{
    protected $rezepte;

    /**
     * @return mixed
     */
    public function getRezepte()
    {
        return $this->rezepte;
    }

    /**
     * @param mixed $rezepte
     */
    public function setRezepte($rezepte)
    {
        $this->rezepte = $rezepte;
    }

    public function execute($user)
    {
        if($this->canExecute($user)){
            return $user->getName()." viewed Rezepte\n";
        }else{
            return $user->getName()." can not view Rezepte\n";
        }
    }

    public function canExecute($user)
    {
        switch ($user->getRolle()){
            case Rolle::admin:
                return true;
            case Rolle::gast:
                return true;
            case Rolle::editor:
                return true;
            case Rolle::mitglied:
                return true;
            default:
                return false;
        }
    }
}
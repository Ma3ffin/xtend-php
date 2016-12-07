<?php
/**
 * Created by PhpStorm.
 * User: Marcus
 * Date: 07.12.2016
 * Time: 11:53
 */

namespace Community;


class RezeptNeu extends Action
{
    protected $rezept;

    /**
     * @return mixed
     */
    public function getRezept()
    {
        return $this->rezept;
    }

    /**
     * @param mixed $rezept
     */
    public function setRezept($rezept)
    {
        $this->rezept = $rezept;
    }

    public function execute($user)
    {
        if($this->canExecute($user)){
            return $user->getName()." added ".$this->getRezept()->getName(). " \n";
        }else{
            return $user->getName()." can not add".$this->getRezept()->getName(). " \n";
        }
    }

    public function canExecute($user)
    {
        switch ($user->getRolle()){
            case Rolle::admin:
                return true;
            case Rolle::gast:
                return false;
            case Rolle::editor:
                return true;
            case Rolle::mitglied:
                return false;
            default:
                return false;
        }
    }
}
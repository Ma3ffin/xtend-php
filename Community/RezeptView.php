<?php
namespace Community;
/**
 * Created by PhpStorm.
 * User: mwoller
 * Date: 06.12.2016
 * Time: 18:53
 */
class RezeptView extends Action
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
            return "Darf ". $this->getName();
        }else{
            return "Darf nicht ". $this->getName();
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
<?php
namespace Community;
/**
 * Created by PhpStorm.
 * User: mwoller
 * Date: 06.12.2016
 * Time: 18:46
 */
class RezeptBewerten extends Action
{

    protected $bewertung;
    protected $rezept;

    /**
     * @return mixed
     */
    public function getBewertung()
    {
        return $this->bewertung;
    }

    /**
     * @param mixed $bewertung
     */
    public function setBewertung($bewertung)
    {
        $this->bewertung = $bewertung;
    }

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
            return $user->getName()." hat ".$this->getRezept()->getName(). " mit ".$this->getBewertung() ." bewerted\n";
        }else{
            return $user->getName()." darf ".$this->getRezept()->getName(). " nicht mit ".$this->getBewertung() ." bewerten\n";
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
                return true;
            default:
                return false;
        }
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Marcus
 * Date: 07.12.2016
 * Time: 11:58
 */

namespace Community;


class ChangeUserRolle extends Action
{
    protected $changeUser;
    protected $rolle;

    /**
     * @return mixed
     */
    public function getChangeUser()
    {
        return $this->changeUser;
    }

    /**
     * @param mixed $changeUser
     */
    public function setChangeUser($changeUser)
    {
        $this->changeUser = $changeUser;
    }

    /**
     * @return mixed
     */
    public function getRolle()
    {
        return $this->rolle;
    }

    /**
     * @param mixed $rolle
     */
    public function setRolle($rolle)
    {
        $this->rolle = $rolle;
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
                return false;
            case Rolle::editor:
                return false;
            case Rolle::mitglied:
                return false;
            default:
                return false;
        }
    }
}
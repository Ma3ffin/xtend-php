<?php
namespace Community;
/**
 * Created by PhpStorm.
 * User: mwoller
 * Date: 06.12.2016
 * Time: 18:34
 */
class User
{
    protected $name;
    protected $passwort;
    protected $rolle;

    protected $edit;
    protected $view;
    protected $list;
    protected $rate;
    protected $neu;
    protected $changerole;

    /**
     * User constructor.
     * @param $name
     * @param $passwort
     * @param $rolle
     */
    public function __construct($name, $passwort, $rolle)
    {
        $this->name = $name;
        $this->passwort = $passwort;
        $this->rolle = $rolle;
        $this->edit = new RezeptBearbeiten("Rezept bearbeiten");
        $this->view = new RezeptView("Rezept sehen");
        $this->list = new RezeptList("Rezepte sehen");
        $this->rate = new RezeptBewerten("Rezepte bewerten");
        $this->neu = new RezeptNeu("Rezept erstellen");
        $this->changerole = new ChangeUserRolle("Rolle aendern");
    }

    /**
     * @return mixed
     */
    public function getEdit()
    {
        return $this->edit;
    }

    /**
     * @return mixed
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @return mixed
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @return mixed
     */
    public function getNeu()
    {
        return $this->neu;
    }

    /**
     * @return mixed
     */
    public function getChangerole()
    {
        return $this->changerole;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPasswort()
    {
        return $this->passwort;
    }

    /**
     * @param mixed $passwort
     */
    public function setPasswort($passwort)
    {
        $this->passwort = $passwort;
    }

    /**
     * @return mixed
     */
    public function getRolle()
    {
        return $this->rolle;
    }

    /**
     * @param mixed $role
     */
    public function setRolle($rolle)
    {
        $this->rolle = $rolle;
    }

}
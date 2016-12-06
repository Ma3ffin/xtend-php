<?php
namespace Rezept;

/**
 * Created by PhpStorm.
 * User: mwoller
 * Date: 06.12.2016
 * Time: 16:47
 */
class Schritt
{
    protected $name;
    protected $beschreibung;
    protected $zutaten;
    protected $prevstep;

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
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

    /**
     * @param mixed $beschreibung
     */
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;
    }

    /**
     * @return mixed
     */
    public function getZutaten()
    {
        return $this->zutaten;
    }

    /**
     * @param mixed $zutaten
     */
    public function setZutaten($zutaten)
    {
        $this->zutaten = $zutaten;
    }

    /**
     * @return mixed
     */
    public function getPrevstep()
    {
        return $this->prevstep;
    }

    /**
     * @param mixed $prevstep
     */
    public function setPrevstep($prevstep)
    {
        $this->prevstep = $prevstep;
    }
}
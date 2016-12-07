<?php
namespace Rezept;

/**
 * Created by PhpStorm.
 * User: mwoller
 * Date: 06.12.2016
 * Time: 16:46
 */
class Zutatenstufe
{
    protected $name;
    protected $beschreibung;
    protected $zutaten;

    /**
     * Zutatenstufe constructor.
     * @param $name
     * @param $beschreibung
     * @param $zutaten
     */
    public function __construct($name, $beschreibung, $zutaten)
    {
        $this->name = $name;
        $this->beschreibung = $beschreibung;
        $this->zutaten = $zutaten;
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
}
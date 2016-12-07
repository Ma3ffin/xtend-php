<?php
/**
 * Created by PhpStorm.
 * User: mwoller
 * Date: 06.12.2016
 * Time: 16:53
 */

namespace Rezept;


class Rezept
{
    protected $name;
    protected $beschreibung;
    protected $zutaten;
    protected $zutatenstufen;
    protected $bilder;

    /**
     * Rezept constructor.
     * @param $name
     * @param $beschreibung
     * @param $zutaten
     * @param $zutatenstufen
     * @param $schritte
     * @param $bilder
     */
    public function __construct($name, $beschreibung, $zutaten, $zutatenstufen, $bilder)
    {
        $this->name = $name;
        $this->beschreibung = $beschreibung;
        $this->zutaten = $zutaten;
        $this->zutatenstufen = $zutatenstufen;
        $this->bilder = $bilder;
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

    /**
     * @return mixed
     */
    public function getZutatenstufen()
    {
        return $this->zutatenstufen;
    }

    /**
     * @param mixed $zutatenstufen
     */
    public function setZutatenstufen($zutatenstufen)
    {
        $this->zutatenstufen = $zutatenstufen;
    }

    /**
     * @return mixed
     */
    public function getBilder()
    {
        return $this->bilder;
    }

    /**
     * @param mixed $bilder
     */
    public function setBilder($bilder)
    {
        $this->bilder = $bilder;
    }

}
<?php
namespace Rezept;

/**
 * Created by PhpStorm.
 * User: mwoller
 * Date: 06.12.2016
 * Time: 16:15
 */
class Bild
{
    protected $beschreibung;
    protected $pfad;

    /**
     * Bild constructor.
     * @param $beschreibung
     * @param $pfad
     */
    public function __construct($beschreibung, $pfad)
    {
        $this->beschreibung = $beschreibung;
        $this->pfad = $pfad;
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
    public function getPfad()
    {
        return $this->pfad;
    }

    /**
     * @param mixed $pfad
     */
    public function setPfad($pfad)
    {
        $this->pfad = $pfad;
    }

}
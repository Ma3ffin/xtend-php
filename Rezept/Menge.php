<?php
namespace Rezept;

/**
 * Created by PhpStorm.
 * User: mwoller
 * Date: 06.12.2016
 * Time: 16:38
 */
class Menge
{

    protected $anzahl;
    protected $einheit;

    /**
     * Menge constructor.
     * @param $anzahl
     * @param $einheit
     */
    public function __construct($anzahl, $einheit)
    {
        $this->anzahl = $anzahl;
        $this->einheit = $einheit;
    }


    /**
     * @return mixed
     */
    public function getAnzahl()
    {
        return $this->anzahl;
    }

    /**
     * @param mixed $anzahl
     */
    public function setAnzahl($anzahl)
    {
        $this->anzahl = $anzahl;
    }

    /**
     * @return mixed
     */
    public function getEinheit()
    {
        return $this->einheit;
    }

    /**
     * @param mixed $Einheit
     */
    public function setEinheit($einheit)
    {
        $this->einheit = $einheit;
    }



}
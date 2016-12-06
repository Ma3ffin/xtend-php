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
    protected $name;
    protected $beschreibung;
    protected $pfad;
    protected $servierbeschreibung;


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
    public function getServierbeschreibung()
    {
        return $this->servierbeschreibung;
    }

    /**
     * @param mixed $servierbeschreibung
     */
    public function setServierbeschreibung($servierbeschreibung)
    {
        $this->servierbeschreibung = $servierbeschreibung;
    }


}
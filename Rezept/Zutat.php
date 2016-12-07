<?php
namespace Rezept;

/**
 * Created by PhpStorm.
 * User: mwoller
 * Date: 06.12.2016
 * Time: 16:41
 */
class Zutat
{
    protected $name;
    protected $description;
    protected $menge;

    /**
     * Zutat constructor.
     * @param $name
     * @param $description
     * @param $menge
     */
    public function __construct($name, $description, $menge)
    {
        $this->name = $name;
        $this->description = $description;
        $this->menge = $menge;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getMenge()
    {
        return $this->menge;
    }

    /**
     * @param mixed $menge
     */
    public function setMenge($menge)
    {
        $this->menge = $menge;
    }

}
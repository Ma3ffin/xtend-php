<?php
/**
 * Created by PhpStorm.
 * User: mwoller
 * Date: 06.12.2016
 * Time: 16:55
 */

namespace Rezept;


class Verwandterezepte
{
    protected $name;
    protected $rezepte;

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
    public function getRezepte()
    {
        return $this->rezepte;
    }

    /**
     * @param mixed $rezepte
     */
    public function setRezepte($rezepte)
    {
        $this->rezepte = $rezepte;
    }
}
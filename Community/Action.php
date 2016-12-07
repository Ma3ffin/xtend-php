<?php
namespace Community;
/**
 * Created by PhpStorm.
 * User: mwoller
 * Date: 06.12.2016
 * Time: 18:00
 */
class Action
{
    protected $name;

    /**
     * Action constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
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

    public function execute($user){

    }

    public function canExecute($user){

    }

}
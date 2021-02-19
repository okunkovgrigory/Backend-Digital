<?php


namespace RKDigital\Orm\Entity;


/**
 * Class Entity
 * @package RKDigital\Orm\Entity
 */
abstract class Entity
{
    /**
     * @return mixed
     */
    abstract public function getElements();
}
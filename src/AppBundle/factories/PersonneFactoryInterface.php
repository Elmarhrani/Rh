<?php

namespace AppBundle\factories;
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 27/12/16
 * Time: 21:52
 */
interface PersonneFactoryInterface
{

    /**
     * @param string $type
     *
     * @return PersonneInterface
     */
    public function create($type);

}
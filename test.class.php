<?php

/**
 * Created by PhpStorm.
 * User: annuoaichengzhang
 * Date: 16/8/10
 * Time: 12:05
 */
class Test
{
    private $day;


    function __construct($day)
    {
        $this->day = $day;
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

}
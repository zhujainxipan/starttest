<?php

/**
 * Created by PhpStorm.
 * User: annuoaichengzhang
 * Date: 16/8/8
 * Time: 18:44
 */
class Result
{
    private $shape = null;

    function __construct()
    {
        $this->shape = new $_GET["action"]();
    }

    function __toString()
    {
        $result = $this->shape->shapeName . '的周长：' . round($this->shape->permiter(), 2) . '<br>';
        $result .= $this->shape->shapeName . '的面积：' . round($this->shape->area(), 2) . '<br>';
        return $result;
    }


}
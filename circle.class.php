<?php

/**
 * Created by PhpStorm.
 * User: annuoaichengzhang
 * Date: 16/8/8
 * Time: 20:52
 */
class Circle extends Shape
{
    private $radius = 0;

    function __construct()
    {
        $this->shapeName = "圆形";
        if ($this->validate($_POST["radius"], "宽度")) {
            $this->radius = $_POST["radius"];
        }
    }


    function area()
    {
        return pi() * $this->radius * $this->radius;
    }

    function perimeter()
    {
        return 2 * pi() * $this->radius;
    }
}
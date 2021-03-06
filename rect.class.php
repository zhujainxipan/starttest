<?php

/**
 * Created by PhpStorm.
 * User: annuoaichengzhang
 * Date: 16/8/8
 * Time: 20:29
 */
class Rect extends Shape
{
    private $width = 0;
    private $height = 0;

    function __construct()
    {
        $this->shapeName = "矩形";
        if ($this->validate($_POST["width"], "宽度") && $this->validate($_POST["height"])) {
            $this->width = $_POST["width"];
            $this->height = $_POST["height"];
        }
    }

    function area()
    {
        return $this->width * $this->height;
    }

    function perimeter()
    {
        return ($this->height + $this->width) * 2;
    }
}
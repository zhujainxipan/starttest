<?php

/**
 * Created by PhpStorm.
 * User: annuoaichengzhang
 * Date: 16/8/10
 * Time: 10:17
 */
class Calendar
{
    /*
     * 当前的年
     */
    private $year;
    /*
     * 当前的月
     */
    private $month;
    /*
     * 当月的第一天对应的是周几，作为当月开始遍历日期的开始
     */
    private $start_weekday;
    /*
     * 当前月总天数
     */
    private $days;

    function __construct()
    {
        $this->year = isset($_GET["year"]) ? $_GET["year"] : date("Y");
        $this->month = isset($_GET["month"]) ? $_GET["month"] : date("m");
        $this->days = date("t", mktime(0, 0, 0, $this->month, 1, $this->year));
        $this->start_weekday = date("w", mktime(0, 0, 0, $this->month, 1, $this->year));
    }


    private function weeksList()
    {
        $week = array('日', '一', '二', '三', '四', '五', '六');
        $out .= '<tr>';
        for ($i = 0; $i < count($week); $i++) {
            $out .= '<th>' . $week[$i] . '</th>';
        }
        $out .= '</tr>';
        return $out;
    }

    private function daysList()
    {
        $out .= '<tr>';
        for ($j = 0; $j < $this->start_weekday; $j++) {
            $out .= '<td>&nbsp;</td>';
            for ($k = 1; $k <= $this->days; $k++) {
                $j++;
                $out .= '<td>' . $k . '</td>';
                if ($j % 7 == 0) {
                    $out .= '<tr></tr>';
                }
            }
        }

        while ($j % 7 == 0) {
            $out .= '<td>&nbsp;</td>';
            $j++;
        }

        $out .= '</tr>';
        return $out;
    }


    function __toString()
    {
        $out .= '<table>';
        $out .= $this->weeksList();
        $out .= $this->daysList();
        $out .= '</table>';
        return $out;
    }


}
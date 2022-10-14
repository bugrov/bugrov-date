<?php

namespace Bugrov\Web;

class Time
{
    use TimeTrait;

    public $rusMonthNames = [
        1 => 'Январь',
        'Февраль',
        'Март',
        'Апрель',
        'Май',
        'Июнь',
        'Июль',
        'Август',
        'Сентябрь',
        'Октябрь',
        'Ноябрь',
        'Декабрь',
    ];

    public $day, $month, $year;

    public function __construct()
    {
        $this->day = $this->getCurrentDay();
        $this->month = $this->getCurrentMonth();
        $this->year = $this->getCurrentYear();
    }

    public function getCurrentDay()
    {
        return date('d');
    }

    public function getCurrentMonth()
    {
        return $this->rusMonthNames[date('n')];
    }

    public function getCurrentYear()
    {
        return date('Y');
    }

    public function getCurrentDateRussian()
    {
        return $this->day . ' ' . $this->getDeclensionMonth($this->month) . ' ' . $this->year;
    }

    private function getDeclensionMonth($month)
    {
        return $this->lastCharReplace($month, 'я', -1);
    }
}
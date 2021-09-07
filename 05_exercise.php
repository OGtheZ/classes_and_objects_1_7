<?php

class date
{
    private int $day;
    private string $month;
    private int $year;

    public function __construct(int $day, string $month, int $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getMonth(): string
    {
        return $this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function displayDate()
    {
        echo "{$this->month} / {$this->day} / {$this->year}" . PHP_EOL;
    }
}

$today = new date(6, "September", 2021);
$today->displayDate();
<?php

namespace App\Service;

class Calendar implements CalendarInterface
{
    /**
     * @var FrenchPublicHoliday
     */
    private $holiday;

    public function __construct(FrenchPublicHoliday $holiday)
    {
        $this->holiday = $holiday;
    }

    public function isWorkingDay(\DateTimeInterface $date): bool
    {
        return
            !in_array($date->format('N'), [6, 7]) &&
            !$this->holiday->isPublicHoliday($date)
        ;
    }
}

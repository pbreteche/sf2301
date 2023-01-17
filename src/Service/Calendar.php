<?php

namespace App\Service;

class Calendar implements CalendarInterface
{
    public function __construct(
        private readonly FrenchPublicHoliday $holiday
    ) {}

    public function isWorkingDay(\DateTimeInterface $date): bool
    {
        return
            !in_array($date->format('N'), [6, 7]) &&
            !$this->holiday->isPublicHoliday($date)
        ;
    }
}

<?php

namespace App\Service;

class Calendar
{
    public function isWorkingDay(\DateTimeInterface $date): bool
    {
        return !in_array($date->format('N'), [6, 7]);
    }
}

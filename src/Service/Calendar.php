<?php

namespace App\Service;

class Calendar
{
    public function isWorkingDay(\DateTimeInterface $date): bool
    {
        return true;
    }
}

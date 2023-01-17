<?php

namespace App\Service;

class FrenchPublicHoliday
{
    public function isPublicHoliday(\DateTimeInterface $dateTime)
    {
        $dm = $dateTime->format('dm');

        return in_array($dm, ['0105', '0805', '1407', '1508', '0111', '1111', '2512']);
    }
}

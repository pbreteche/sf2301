<?php

namespace App\Service;

class FrenchPublicHoliday
{
    private array $publicHoliday = ['0105', '0805', '1407', '1508', '0111', '1111', '2512'];

    public function __construct(bool $pentecostIsWorked)
    {
        if ($pentecostIsWorked) {
            $this->publicHoliday[] = '0106';
        }
    }

    public function isPublicHoliday(\DateTimeInterface $dateTime): bool
    {
        $dm = $dateTime->format('dm');

        return in_array($dm, $this->publicHoliday);
    }
}

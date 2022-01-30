<?php
namespace dip_sample;

class Clock
{
    public function monthDay()
    {
        $dateTime = new DateTime('NOW');
        return $dateTime->format('M d');
    }
}
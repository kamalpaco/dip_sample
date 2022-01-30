<?php
namespace dip_sample;

interface EmployeeRepository
{
    static function findEmployeesBornOn(Clock $monthDay);
}

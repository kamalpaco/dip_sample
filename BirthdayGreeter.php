<?php

use dip_sample\Clock;
use dip_sample\Email;
use dip_sample\Employee;
use dip_sample\EmployeeRepository;

class BirthdayGreeter
{
    private $employeeRepository;
    private $clock;

    function __construct(EmployeeRepository $employeeRepository, Clock $clock)
    {
        $this->employeeRepository = $employeeRepository;
        $this->clock = $clock;
    }

    public function sendGreetings()
    {
        $today = Clock::monthDay();

        array_map(function($employee) {
            Email::EmailSender()->send($this->emailFor($employee));
        }, $this->employeeRepository->findEmployeesBornOn($today));
    }

    private function emailFor(Employee $employee)
    {
        $message = sprintf("Happy birthday, dear %s!", $employee->getFirstName());
        return new Email($employee->getEmail(), "Happy birthday!", $message);
    }

}
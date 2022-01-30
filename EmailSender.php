<?php
namespace dip_sample;

class EmailSender
{
    public function send(Email $email)
    {
        error_log("To:" . $email . getTo() . ", Subject: " . $email . getSubject() . ", Message: " . $email . getMessage());
    }
}
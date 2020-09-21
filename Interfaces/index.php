<?php

// Think of an interface as a class with no behavior. Instead, it describes the terms for a particular contract.
// interface as a class with no behavior only method signature
// Any class that signs / implements this contract must adhere to those terms.

interface Newsletter
{
    public function subscribe($user);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        die('Subscribe from Campaign monitor');
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        die('Subscribe from Drip');
    }
}

class Sendgrid implements Newsletter
{
    public function subscribe($email)
    {
        die('Subscribe from Sendgrid');
    }
}

class NewsLetterSubscriptionsController
{
    public function store(Newsletter $newsletter)
    {
        $newsletter->subscribe('abc@g.com');
    }
}

$newsletter = new NewsLetterSubscriptionsController();
$newsletter->store(New Sendgrid());



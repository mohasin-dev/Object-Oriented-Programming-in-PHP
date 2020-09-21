<?php

// object composition, To break it down into the simplest of terms, composition is when one object holds a pointer to another object.
// This allows us to construct complex functionality by combining various types.

class Subscription
{
    protected $getway;

    public function __construct(Getway $getway)
    {
        $this->getway = $getway;
    }

    public function create()
    {

    }

    public function cancel()
    {
        return $this->getway->findCustomer();
    }

    public function invoice()
    {
        
    }

    public function swap($newPlan)
    {
        
    }
}

interface Getway
{
    public function findCustomer();
    public function findSubscriptionByCustomer();
}

class StripeGetway implements Getway
{
    public function findCustomer()
    {
        return 'Stripe Customer';
    }

    public function findSubscriptionByCustomer()
    {
        //
    }
}

class BrainTreeGetway implements Getway
{
    public function findCustomer()
    {
        return 'Braintree Customer';
    }

    public function findSubscriptionByCustomer()
    {
        //
    }
}

echo (new Subscription(new StripeGetway))->cancel();
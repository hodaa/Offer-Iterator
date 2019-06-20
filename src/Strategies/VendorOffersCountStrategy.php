<?php


namespace Hoda\Strategies;

use Hoda\Contracts\StrategyInterface;

class VendorOffersCountStrategy
{
    public  function __construct()
    {
    }
    public function filter(array $offers, int $id)
    {
        return array_filter($offers, function ($offer) use ($id) {
            return $offer->vendor->id ==$id;
        });
    }
}
<?php


namespace Hoda\Strategies;

use Hoda\Contracts\StrategyInterface;

class PriceFilterStrategy implements StrategyInterface
{
    /**
     * @param array $offers
     * @param string $start_price
     * @param string $end_price
     * @return array
     */
    public  function  filter(array $offers, string $start_price,string $end_price)
    {

       return array_filter($offers, function ($offer) use ($start_price,$end_price) {
            return $offer->price >= floatval($start_price) && $offer->price <= floatval($end_price);
        });

    }
}
<?php

namespace Hoda\Strategies;


use Hoda\Contracts\StrategyInterface;
use Hoda\Traits\FilterLogger;

class DateFilterStrategy implements StrategyInterface
{
    use FilterLogger;
    private $reader;


    /**
     * @param string $start_date
     * @param string $end_date
     * @return object
     * @throws \Exception
     */
    public function filter(array $offers,string $start_date, string $end_date): array
    {

        $this->log('date_filter', $start_date, $end_date);

        return  array_filter($offers, function ($offer) use ($start_date,$end_date) {
            return $offer->start_time > $start_date && $offer->end_time < $end_date;
        });


    }
}

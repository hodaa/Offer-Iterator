<?php
namespace  Hoda;

use Hoda\Contracts\StrategyInterface;
use Hoda\Factories\FilterFactory;

class FilterStrategyClient
{
    /**
     * @param $filter
     * @param $param1
     * @param $param2
     * @return mixed
     */
    public function getStrategy($filter,$param1,$param2)
    {
         $obj=FilterFactory::create($filter);
         return $obj->filter($param1,$param2);

    }
}

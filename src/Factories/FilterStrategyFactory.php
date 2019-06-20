<?php


namespace Hoda\Factories;

use Hoda\Contracts\StrategyInterface;


/**
 * Class FilterFactory.
 */
class FilterStrategyFactory
{
    public static function create(string $filter) :StrategyInterface
    {
        $className = str_replace(
           ' ',
           '',
           ucwords(str_replace('_', ' ', $filter))
       ).'Strategy';

        $className = 'Hoda\\Strategies\\'.$className;

        return new $className();
    }
}

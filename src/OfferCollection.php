<?php

namespace  Hoda;

use \Hoda\Contracts\OfferCollectionInterface;
use Hoda\Contracts\OfferInterface;

class OfferCollection implements OfferCollectionInterface {

    private $offers=[];


    public  function add(OfferInterface $offer): void
    {
        $this->offers[]=$offer;


        // TODO: Implement add() method.
    }
    public function  get(int $index): OfferInterface
    {
        return $this->offers[$index];
    }
    public  function getIterator()
    {
        return new Offer();
    }

}
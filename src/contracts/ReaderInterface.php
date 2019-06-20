<?php

namespace  Hoda\Contracts;


Interface ReaderInterface
{
    public  function read(array $argv) :OfferCollectionInterface ;

}
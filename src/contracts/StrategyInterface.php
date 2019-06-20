<?php
 namespace Hoda\Contracts;

 /**
  * Interface StrategyInterface
  * @package Hoda\Contracts
  */
 interface  StrategyInterface{

     public  function filter(array $offers, string $first_filter, string $second_filter);
 }
<?php
namespace  Hoda;

use http\Exception\InvalidArgumentException;

/**
 * Class CLI
 * @package Hoda
 */
class CLI{
    /**
     * @var
     */
    private $argv;

    /**
     * CLI constructor.
     * @param $argv
     */
    public  function __construct($argv)
    {
        $this->argv=$argv;
    }

    /**
     * @return array
     */
   public  function parse() :array
   {
        if(!$this->argv[1]){
            throw new \InvalidArgumentException('You should Enter Filter Name');
        }
        if(!isset($this->argv[2])){
            throw new \InvalidArgumentException('You should Enter one Filter at least');
        }
        $filter_name=$this->argv[1];
        $first_param=$this->argv[2];
        $second_param= $this->argv[3];

        return[$filter_name,$first_param,$second_param];
   }
}
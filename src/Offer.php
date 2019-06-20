<?php
namespace Hoda;

use Hoda\Contracts\OfferInterface;

class Offer implements OfferInterface{

    /**
     * @var OfferCollection
     */

    /** @var int */

    private $price;
    private $id;
    private $start_date;
    private $end_date;


    /**
     * @param string $name
     */
    public  function  setId(int $id):void
    {
        $this->id=$id;

    }

    /**
     * @param string $name
     */
    public  function  setPrice(string $price):void
    {
        $this->price=$price;

    }

    /**
     * @param string $start_date
     */
    public function setStartDate(string $start_date):void
    {
        $this->start_date=$start_date;

    }

    /**
     * @param string $end_date
     */
    public  function setEndDate(string $end_date) :void
    {
        $this->end_date=$end_date;

    }


}
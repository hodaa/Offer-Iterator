<?php


namespace  Hoda\Contracts;

interface OfferCollectionInterface
{
    /**
     * Add offer to the collection.
     *
     * @param OfferInterface $offer
     */
    public function add(OfferInterface $offer): void;

    /*
     * Get offer at specific index
     *
     * @param int $index
     * @return OfferInterface
     * */

    public function get(int $index): OfferInterface;
    /**
     * @return Iterator
     */

    public function getIterator();

}

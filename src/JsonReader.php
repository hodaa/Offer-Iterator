<?php


namespace  Hoda;

use Hoda\Contracts\OfferCollectionInterface;
use Hoda\Contracts\ReaderInterface;
use Hoda\Factories\FilterStrategyFactory;
use http\Exception\InvalidArgumentException;


class JsonReader implements ReaderInterface
{
    private $offerCollection;
    public  function __construct(OfferCollectionInterface $offerCollection)
    {
        $this->offerCollection=$offerCollection;

    }

    /**
     * @param Contracts\string $response
     * @return OfferCollectionInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function read($argv): OfferCollectionInterface
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', URL);

        $offers = json_decode($response->getBody());

        if(!isset($argv[1])){
            throw  new InvalidArgumentException("You Should Enter Filter Name");
        }
        $class= FilterStrategyFactory::create($argv[1]);
        var_dump($offers->special_offers);
        $filtered_offers = $class->filter($offers->special_offers,$argv[2],$argv[3]);

        foreach ($filtered_offers as $offerObj)
        {
            $offer=new Offer();
            $offer->setId($offerObj->id);
            $offer->setPrice($offerObj->price);
            $offer->setStartDate($offerObj->start_time);
            $offer->setEndDate($offerObj->end_time);
            $this->offerCollection->add($offer);
        }
        return $this->offerCollection;
    }
}

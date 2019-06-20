<?php

require 'vendor/autoload.php';
require_once 'config.php';

use Hoda\JsonReader;
use Hoda\Offer;
use Hoda\OfferCollection;

$reader = new JsonReader(new OfferCollection(), new Offer());
$data = $reader->read($argv);
var_dump($data);

<?php

namespace Hoda\Traits;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;


trait FilterLogger{

    /**
     * @param $filter_type
     * @param $pram1
     * @param $pram2
     * @throws \Exception
     */
    public  function  log($filter_type,$pram1,$pram2){
        $log = new Logger('cli-logger');
        $log_name=date('Y-m-d').'.log';
        $log->pushHandler(new StreamHandler('logs/'.$log_name, Logger::INFO));

        $log->pushHandler(new FirePHPHandler());

        $log->info('Filter of type'.$filter_type.'run using paramters '.$pram1.','.$pram2  );
    }
}
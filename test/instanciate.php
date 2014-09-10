<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Bitstamp\bitstamp;
use \Exception;


try{

	// replace with api keys
	$stamp = new bitstamp("KEY","SECRET","CLIENT_ID");

	$ticker = $stamp->ticker();
	$balance = $stamp->balance();

	var_dump($ticker);
	var_dump($balance);

}catch(Exception $e){
	echo $e->getMessage()."\n";

}

<?php
require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Libs\Api;

// config
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
$config = [
    'key' => getenv('key'),
    'skey' => getenv('skey'),
    'userid' => getenv('userid'),
    'apiurl' => getenv('apiurl')
];
// var_dump($config);

// create a log channel
// $log = new Logger('tmc');
// $log->pushHandler(new StreamHandler('logs/tmc.log', Logger::WARNING));
// add records to the log
// $log->warning('Foo');
// $log->error('Bar');

$api = new Api($config);
// bid -- buy, ask -- sell
$price = $api->getPrice();
var_dump($price);

$balance = $api->getBalance();
var_dump($balance);

$orderList = $api->getOrderList();
var_dump($orderList);

// buy
// $price = 4;
// $amount = 1;
// $coinname = 'tmc';
// $result = $api->submitOrder(1, $price, $amount, $coinname);

// sell
// $price = 14;
// $amount = 1;
// $coinname = 'tmc';
// $result = $api->submitOrder(2, $price, $amount, $coinname);

// cancel order
// $orderId = '368168415';
// $result = $api->cancelOrder($orderId);
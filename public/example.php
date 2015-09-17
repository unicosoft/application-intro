<?php

namespace MyApp;

use Zend\Db\TableGateway\TableGateway;
use Zend\Mvc\Application;

/** @var Application $application */
$application = include __DIR__.'/../init_autoload.php';

/**
 * Here you have full composer autoloader support and additional ZF2 Module support!
 */

/** @var TableGateway $productTable */
$productTable = $application->getServiceManager()->get('ProductTable');

var_dump($productTable->select()->toArray());

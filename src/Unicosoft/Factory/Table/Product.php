<?php

namespace Unicosoft\Factory\Table;

use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\TableGateway;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Product implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var Adapter $dbAdapter */
        $dbAdapter = $serviceLocator->get('Zend\Db\Adapter\Adapter');
        return new TableGateway('products', $dbAdapter);
    }
}

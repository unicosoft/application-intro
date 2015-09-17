<?php


namespace MyApp;

use Zend\Mvc\Application;

require_once __DIR__.'/vendor/autoload.php';

return Application::init(include __DIR__.'/config/application.config.php');
<?php

declare(strict_types=1);

use Application\Setup\ApplicationSetup;
use BlueMvc\Core\Application;
use BlueMvc\Core\Request;
use BlueMvc\Core\Response;

require_once __DIR__.'/vendor/autoload.php';

$application = new Application();
ApplicationSetup::setup($application);

$request = new Request();
$response = new Response();
$application->run($request, $response);

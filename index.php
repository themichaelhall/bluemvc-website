<?php

use BlueMvc\Core\Application;
use BlueMvc\Core\Request;
use BlueMvc\Core\Response;

require_once __DIR__.'/vendor/autoload.php';

$application = new Application();
require_once __DIR__.'/setup.php';

$request = new Request();
$response = new Response($request);
$application->run($request, $response);

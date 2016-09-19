<?php

use Application\Controllers\IndexController;
use BlueMvc\Core\Route;
use BlueMvc\Twig\TwigViewRenderer;
use DataTypes\FilePath;

/*
 * Set up view handling.
 */

$application->addViewRenderer(new TwigViewRenderer());
$application->setViewPath(FilePath::parse('application/Views/'));

/*
 * Set up routes.
 */

$application->addRoute(new Route('', IndexController::class));

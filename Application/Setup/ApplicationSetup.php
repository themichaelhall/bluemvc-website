<?php

namespace Application\Setup;

use Application\Controllers\IndexController;
use BlueMvc\Core\Interfaces\ApplicationInterface;
use BlueMvc\Core\Route;
use BlueMvc\Twig\TwigViewRenderer;
use DataTypes\FilePath;

/**
 * The application setup.
 */
class ApplicationSetup
{
    /**
     * Sets up the application.
     *
     * @param ApplicationInterface $application The application.
     */
    public static function setup(ApplicationInterface $application)
    {
        // Set up view handling.
        $application->addViewRenderer(new TwigViewRenderer());
        $application->setViewPath(FilePath::parse('application/Views/'));

        // Set up routes.
        $application->addRoute(new Route('', IndexController::class));
    }
}

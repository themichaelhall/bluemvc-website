<?php

declare(strict_types=1);

namespace Application\Setup;

use Application\Controllers\IndexController;
use BlueMvc\Core\Interfaces\ApplicationInterface;
use BlueMvc\Core\Route;
use BlueMvc\Twig\TwigViewRenderer;
use DataTypes\System\FilePath;

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
    public static function setup(ApplicationInterface $application): void
    {
        // Set up view handling.
        $application->addViewRenderer(new TwigViewRenderer());
        $application->setViewPath(FilePath::parseAsDirectory('Application/Views'));

        // Set up routes.
        $application->addRoute(new Route('', IndexController::class));
    }
}

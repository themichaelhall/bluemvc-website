<?php

declare(strict_types=1);

namespace Application\Controllers;

use BlueMvc\Core\Controller;
use BlueMvc\Core\View;

/**
 * The index controller class.
 */
class IndexController extends Controller
{
    /**
     * The index action.
     *
     * @return View The view for this action.
     */
    public function indexAction(): View
    {
        $this->setViewItem('Title', 'My website');

        return new View();
    }
}

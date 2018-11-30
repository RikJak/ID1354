<?php

namespace RecipesWebsite;

use Id1354fw\View\AbstractRequestHandler;
use Id1354fw\Util\Classes;
use RecipesWebsite\Controller\Controller;
use RecipesWebsite\Util\Constants;

/**
 * All requests without a url matching an existing request handler will be
 * redirected to the application's index page. That way, the url will always be 
 * http://server name/context root/page name.
 * 
 * This handler also starts a session and creates a controller.
 */
class DefaultRequestHandler extends AbstractRequestHandler {

    protected function doExecute() {
        $this->session->restart();
        $this->session->set(Constants::TASTY_CONTR_KEY, new Controller());
        \header('Location: ' . Classes::getContextPath() .
                Constants::TASTY_FIRST_PAGE_HANDLER);
    }

}

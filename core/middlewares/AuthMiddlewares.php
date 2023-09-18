<?php

namespace core\middlewares;

use core\Application;
use core\exceptions\ForbiddenException;
use core\middlewares\BaseMiddleware as MiddlewaresBaseMiddleware;

class AuthMiddlewares extends MiddlewaresBaseMiddleware
{
    public array $actions = [];

    /**
     * AuthMiddleware constructor
     * 
     * @param array $actions
     */

    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (!Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}

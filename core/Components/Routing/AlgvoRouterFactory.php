<?php

namespace Aigletter\Framework\Components\Routing;

use Aigletter\Contracts\ComponentFactory;
use \Algvo\Router\Components\Router;

class AlgvoRouterFactory extends ComponentFactory
{

    protected function createConcreteComponent()
    {
        return new Router('\\Aigletter\\App\\Controllers\\');
    }
}


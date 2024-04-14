<?php

declare(strict_types=1);

namespace App\Middleware;

use Framework\contracts\MiddlewareInterface;

class FlashMiddleware implements MiddlewareInterface
{
    public function process(callable $next)
    {
        $next();
    }
}

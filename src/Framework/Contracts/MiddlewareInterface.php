<?php

declare(strict_types=1);

namespace Framework\contracts;

interface MiddlewareInterface
{
    public function process(callable $next);
}

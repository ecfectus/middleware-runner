<?php

namespace Ecfectus\MiddlewareRunner\Test;


use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class TestClassWithoutDependencies
{

    public function __invoke(RequestInterface $request, ResponseInterface $response, $next){
        return $next($request, $response);
    }

}
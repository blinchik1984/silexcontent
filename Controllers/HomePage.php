<?php

namespace Content\Controllers;

use AdServer\Engine\Components\Engine;
use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomePage
{
    public function __construct()
    {
    }

    public function index()
    {
        return new Response(Engine::getDI()->get('contentService')->getContent());
    }

    public function hello()
    {
        return new Response("Hello");
    }
}
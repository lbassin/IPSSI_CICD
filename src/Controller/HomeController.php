<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function handle(): Response
    {
        return new Response('It works');
    }
}

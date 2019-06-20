<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class RandomController
{
    public function handle(): Response
    {
        $number = rand(0, 10);

        // Code smell
        if($number < 5) {
            $response = 'Small';
        } else {
            $response = 'Big';
        }

        return new Response($response);
    }
}

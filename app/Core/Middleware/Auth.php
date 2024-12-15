<?php

namespace Core\Middleware;

class Auth
{
    public function handle()
    {
        // Parenthesis here ensures that the null coalescing operator (??) is
        // evaluated before applying the logical NOT (!)
        if (! ($_SESSION['user'] ?? false) ) {
            header('location: /');
            exit();
        }
    }
}
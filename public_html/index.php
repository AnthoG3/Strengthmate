<?php

use App\Kernel;

// Automatically loads all project dependencies via Composer
require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

// Anonymous function returning an instance of the Symfony Kernel
// It receives a context array containing the environment and debug mode
return function (array $context) {
    // Creates and returns a new instance of the Symfony application kernel
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};

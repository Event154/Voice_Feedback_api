<?php

return [

    'paths' => ['api/*', 'upload-audio'], // API route تبعك

    'allowed_methods' => ['*'],    // كل الميثودز

    'allowed_origins' => ['*'],    // افتحيه لكل المواقع (علشان Netlify)

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];

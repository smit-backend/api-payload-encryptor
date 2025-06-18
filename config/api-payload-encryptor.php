<?php

return [
    'enabled' => env('API_PAYLOAD_ENCRYPTOR_ENABLED', true),
    'timeout' => env('API_PAYLOAD_ENCRYPTOR_TIMEOUT', 30),
    'log_channel' => env('API_PAYLOAD_ENCRYPTOR_LOG', 'stack'),
];

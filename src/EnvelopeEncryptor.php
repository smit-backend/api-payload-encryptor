<?php

declare(strict_types=1);

namespace SmitBackend\FieldCrypto;

use SmitBackend\FieldCrypto\Contracts\KeyManagementInterface;

/**
 * Class EnvelopeEncryptor
 *
 * @package SmitBackend\FieldCrypto
 */
class EnvelopeEncryptor implements KeyManagementInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}

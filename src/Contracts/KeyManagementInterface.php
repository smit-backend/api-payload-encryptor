<?php

declare(strict_types=1);

namespace SmitBackend\FieldCrypto\Contracts;

/**
 * Interface KeyManagementInterface
 *
 * @package SmitBackend\FieldCrypto
 */
interface KeyManagementInterface
{
    public function execute(array $payload = []): mixed;
}

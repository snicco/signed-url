<?php

declare(strict_types=1);

namespace Snicco\Component\SignedUrl\Exception;

use Throwable;

final class BadIdentifier extends SignedUrlException
{
    public static function for(string $id, Throwable $previous = null): BadIdentifier
    {
        return new self(
            sprintf('The identifier [%s] does not exists.', $id),
            null !== $previous ? (int) $previous->getCode() : 0,
            $previous
        );
    }
}

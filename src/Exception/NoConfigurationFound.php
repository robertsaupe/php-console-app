<?php

declare(strict_types=1);

/*
 * This file is part of the robertsaupe/php-console-app package.
 *
 * (c) Robert Saupe <mail@robertsaupe.de>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace robertsaupe\ConsoleApp\Exception;

use Throwable;
use RuntimeException;

/**
 * @internal
 */
final class NoConfigurationFound extends RuntimeException {
    public function __construct(string $message = 'The configuration file could not be found.', int $code = 0, ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

?>
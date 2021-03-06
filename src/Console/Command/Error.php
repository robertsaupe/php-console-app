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

namespace robertsaupe\ConsoleApp\Console\Command;

use Throwable;
use robertsaupe\ConsoleApp\Console\IO;

class Error extends BasicCommandApp {

    protected function configure(): void {
        $this->setName('error');
        $this->setDescription('Outputs an Error');
    }

    public function executeCommand(IO $io):int {
        try {
            /** @phpstan-ignore-next-line */
            $var = 5 / 0;
            $io->writeln('$var: ' . $var);
        } catch (Throwable $throwable) {
            $io->error('Could not read "$var": '.$throwable->getMessage());
            return 1;
        }
        return 0;
    }
}

?>
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

use robertsaupe\ConsoleApp\Console\IO;

class Hello extends BasicCommandApp {

    protected function configure(): void {
        $this->setName('hello');
        $this->setDescription('Outputs "Hello World"');
    }

    public function executeCommand(IO $io):int {
        $io->writeln('Hello World!');
        return 0;
    }
}

?>
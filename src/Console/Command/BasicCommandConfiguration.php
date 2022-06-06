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

use Symfony\Component\Console\Input\InputOption;
use robertsaupe\ConsoleApp\Console\IO;
use robertsaupe\ConsoleApp\Configuration\Loader as ConfigurationLoader;
use robertsaupe\ConsoleApp\Configuration\Configuration;

/**
 * @internal
 */
abstract class BasicCommandConfiguration extends BasicCommandApp {

    private const CONFIG_PARAM = 'config';
    private const CONFIG_PARAM_SHORT = 'c';

    protected function configure(): void {
        $this->addOption(
            self::CONFIG_PARAM,
            self::CONFIG_PARAM_SHORT,
            InputOption::VALUE_REQUIRED,
            'The alternative configuration file path.',
        );
    }

    final protected function getConfig(IO $io): Configuration {
        return ConfigurationLoader::getConfig($io->getInput()->getOption(self::CONFIG_PARAM), $io);
    }

}

?>
<?php

declare(strict_types=1);

namespace PoolsPhp\Pools\ValueObjects;

use PoolsPhp\Pools\ComposerManager;
use PoolsPhp\Pools\PHPPackageInstaller;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Output\OutputInterface;

final readonly class PackagePayload
{
    public function __construct(
        public PHPPackageInstaller $packageInstaller,
        public ComposerManager $composerManager,
        public ArrayInput|InputInterface $input,
        public BufferedOutput|OutputInterface $output,
    ) {}
}

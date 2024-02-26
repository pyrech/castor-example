<?php

namespace pyrech;

use Castor\Attribute\AsTask;
use Symfony\Component\Console\Style\SymfonyStyle;

use function Castor\io;
use function Castor\run;

#[AsTask(description: 'Hello from example!')]
function helloExample(): void
{
    $currentUser = trim(run('whoami', quiet: true)->getOutput());

    io()->title(sprintf('Hello %s!', $currentUser));
}

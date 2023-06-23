<?php

use Castor\Attribute\AsTask;
use Symfony\Component\Console\Style\SymfonyStyle;

use function Castor\io;
use function Castor\run;

#[AsTask(description: 'Welcome to Castor!')]
function hello(): void
{
    $currentUser = trim(run('whoami', quiet: true)->getOutput());

    io()->title(sprintf('Hello %s!', $currentUser));
}
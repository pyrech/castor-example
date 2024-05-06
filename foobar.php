<?php

namespace pyrech;

use Castor\Attribute\AsTask;
use Symfony\Component\Console\Style\SymfonyStyle;

use function Castor\io;
use function Castor\run;

#[AsTask(description: 'Not imported task')]
function notImported(): void
{
    io()->title('This task was not imported from root castor.php!');
}

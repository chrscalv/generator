<?php

namespace Chrscalv\Contract;

use Illuminate\Filesystem\Filesystem;

interface Generator
{
    public function __construct(Filesystem $files);
}
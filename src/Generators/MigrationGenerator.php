<?php

namespace Chrscalv\Generator;

use Chrscalv\Contract\Generator;
use Symfony\Component\Finder;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Filesystem;

class MigrationGenerator implements Generator{
    private $name;

    public function getStub()
    {
        //
    }

    public function build()
    {
        //
    }
}
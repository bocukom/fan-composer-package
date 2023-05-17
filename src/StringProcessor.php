<?php

declare(strict_types=1);

namespace Bocukom\FanComposerPackage;

class StringProcessor
{
    public function getLength(string $s): int
    {
        return strlen($s);
    }
}

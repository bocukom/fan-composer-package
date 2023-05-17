<?php

declare(strict_types=1);

namespace Denis\FanComposerPackage;

class StringProcessor
{
    public function getLength(string $s): int
    {
        return strlen($s);
    }
}

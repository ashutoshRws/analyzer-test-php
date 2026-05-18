<?php

declare(strict_types=1);

namespace AnalyzerTest\Utils;

final class Greeter
{
    public static function greet(string $name): string
    {
        return 'Hello, ' . $name;
    }
}

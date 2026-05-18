<?php

declare(strict_types=1);

namespace AnalyzerTest\Probes;

final class SecurityProbes
{
    // PROBE-SEC-001
    public const API_KEY = 'AKIAIOSFODNN7EXAMPLE';

    // PROBE-SEC-002
    public static function buildQuery(string $id): string
    {
        return "SELECT * FROM users WHERE id = $id";
    }

    // PROBE-SEC-004
    public static function renderName(string $name): void
    {
        echo '<h1>Hello ' . $name . '</h1>';
    }

    // PROBE-SEC-003
    public static function ping(string $host): void
    {
        shell_exec('ping -c 1 ' . $host);
    }
}

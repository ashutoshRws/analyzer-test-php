<?php

declare(strict_types=1);

namespace AnalyzerTest\Models;

final class User
{
    public function __construct(
        private readonly int $id,
        private readonly string $name
    ) {
    }

    public static function create(string $name): self
    {
        return new self(1, $name);
    }

    public function getName(): string
    {
        return $this->name;
    }
}

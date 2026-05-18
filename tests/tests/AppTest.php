<?php

declare(strict_types=1);

require __DIR__ . '/../src/Utils/Greeter.php';
require __DIR__ . '/../src/Models/User.php';

use AnalyzerTest\Models\User;
use AnalyzerTest\Utils\Greeter;

assert(Greeter::greet('world') === 'Hello, world');
assert(User::create('a')->getName() === 'a');

echo "ok\n";

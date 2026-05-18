<?php

declare(strict_types=1);

require __DIR__ . '/Utils/Greeter.php';
require __DIR__ . '/Models/User.php';

use AnalyzerTest\Models\User;
use AnalyzerTest\Utils\Greeter;

$user = User::create('tester');
echo Greeter::greet($user->getName()) . PHP_EOL;

<?php

require __DIR__ . '/../vendor/autoload.php';

$loop     = React\EventLoop\Factory::create();

require $argv[1];

$loop->run();

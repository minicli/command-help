<?php

test('command "help" is correctly loaded', function () {
    $app = getMinicli();
    $app->runCommand(['minicli', 'help']);
})->expectOutputRegex("/help/");

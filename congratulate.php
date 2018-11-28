<?php

include 'vendor/autoload.php';

use Garp\Functional as f;

$cheer = function(string $message) {
    return f\concat($message, '!');
};

$congratulate = function(int $years) use ($cheer) {
    return f\compose(
        f\join(' '),
        f\repeat($years, $cheer)
    )('Gefeliciteerd');
};

echo "\n----------------------\n";
echo $cheer('Harmen 10 jaar bij GRRR');
echo "\n\n";
echo $congratulate(10);
echo "\n----------------------\n\n";

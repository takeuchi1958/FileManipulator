<?php

if ($argc != 4) {
    echo "Usage: php FileManipulator.php reverse <input_file> <output_file>\n";
    exit(1);
}

$action = $argv[1];
$inputFile = $argv[2];
$outputFile = $argv[3];

if ($action != 'reverse') {
    echo "Unknown action: $action. Supported action is 'reverse'.\n";
    exit(1);
}

if (!file_exists($inputFile)) {
    echo "The input file '$inputFile' does not exist.\n";
    exit(1);
}

$fileContents = file_get_contents($inputFile);
$reversedContents = strrev($fileContents);

file_put_contents($outputFile, $reversedContents);

echo "The contents of '$inputFile' have been reversed and written to '$outputFile'.\n";
?>

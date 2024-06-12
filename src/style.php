<?php
header("Content-Type: text/css");

// Directory containing CSS files
$cssDir = __DIR__ . '/css';

// Get all .css files from the directory
$cssFiles = glob($cssDir . '/*.css');

// Loop through each file and output its contents
foreach ($cssFiles as $file) {
    if (file_exists($file)) {
        readfile($file);
        echo "\n"; // Add a newline between files for readability
    } else {
        echo "/* File $file not found */\n";
    }
}
?>

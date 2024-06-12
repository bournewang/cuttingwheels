<?php
// Define source and destination directories
$srcDir = 'src';
$distDir = 'dist';
$cssDir = 'css';
$imagesDir = 'images';

// Function to recursively copy directories
function copyDir($src, $dst) {
    $dir = opendir($src);
    @mkdir($dst);
    while(false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . '/' . $file)) {
                copyDir($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

// Ensure the destination directories exist
@mkdir($distDir, 0755, true);
@mkdir("$distDir/$cssDir", 0755, true);
@mkdir("$distDir/$imagesDir", 0755, true);

// List of PHP files to convert to HTML
$phpFiles = [
    'index.php',
    'about.php',
    'certifications.php',
    'market.php',
    'products.php',
    'contact.php'
    // Add more PHP files as needed
];

// Export style.php to dist/css/style.css
$stylePhpFile = "$srcDir/style.php";
$styleCssFile = "$distDir/$cssDir/style.css";

if (file_exists($stylePhpFile)) {
    // Start output buffering
    ob_start();
    // Include the PHP file (this executes the PHP code)
    include($stylePhpFile);
    // Get the contents of the buffer
    $cssContent = ob_get_clean();
    // Save the buffer contents to the CSS file
    file_put_contents($styleCssFile, $cssContent);
    echo "Exported $stylePhpFile to $styleCssFile\n";
} else {
    echo "File $stylePhpFile not found\n";
}

// Function to update CSS references in HTML content
function updateCssReferences($content) {
    return str_replace('style.php', 'css/style.css', $content);
}

foreach ($phpFiles as $phpFile) {
    // Define source and destination paths
    $srcFile = "$srcDir/$phpFile";
    $distFile = "$distDir/" . str_replace('.php', '.html', $phpFile);

    // Check if the PHP file exists
    if (file_exists($srcFile)) {
        // Start output buffering
        ob_start();
        // Include the PHP file (this executes the PHP code)
        include($srcFile);
        // Get the contents of the buffer
        $htmlContent = ob_get_clean();

        // Update CSS references in the content
        $htmlContent = updateCssReferences($htmlContent);

        // Replace .php links with .html links in the content
        $htmlContent = str_replace('.php', '.html', $htmlContent);

        // Save the buffer contents to the HTML file
        file_put_contents($distFile, $htmlContent);
        echo "Exported $srcFile to $distFile\n";
    } else {
        echo "File $srcFile not found\n";
    }
}

// Copy the css and images directories from src to dist
// copyDir("$srcDir/$cssDir", "$distDir/$cssDir");
copyDir("$srcDir/$imagesDir", "$distDir/$imagesDir");

echo "Copied $cssDir and $imagesDir directories to $distDir\n";
?>

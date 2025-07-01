<?php
// Define source and destination directories
$srcDir = 'src';
$distDir = 'dist';
$cssDir = 'css';
$imagesDir = 'images';


// Function to execute a system command and display its output
function execCommand($command) {
    echo "Executing: $command\n";
    system($command, $retval);
    if ($retval !== 0) {
        echo "Command failed with return value $retval\n";
        exit($retval);
    }
}

// Delete and recreate the dist directory
if (is_dir($distDir)) {
    echo "Deleting existing $distDir directory...\n";
    execCommand("rm -rf $distDir");
}


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
    'contact.php',
    'product-0.php',
    'product-1.php',
    'product-2.php',
    'product-3.php',
    'product-4.php',
    'product-5.php',
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
    $suffix = '?built=' . date('Ymd-His');
    return str_replace('style.php', 'css/style.css'.$suffix, $content);
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

copy("ads.txt", "$distDir/ads.txt");

echo "Copied $cssDir and $imagesDir directories to $distDir\n";
?>

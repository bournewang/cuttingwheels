<?php
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

// Directory to save the CSS file
$cssDir = 'css';
if (!is_dir($cssDir)) {
    mkdir($cssDir, 0755, true);
}

// Export style.php to css/style.css
$stylePhpFile = 'style.php';
$styleCssFile = $cssDir . '/style.css';

if (file_exists($stylePhpFile)) {
    // Start output buffering
    ob_start();
    // Include the PHP file (this executes the PHP code)
    include($stylePhpFile);
    // Get the contents of the buffer
    $cssContent = ob_get_clean();
    echo $cssContent;
    // Save the buffer contents to the CSS file
    file_put_contents($styleCssFile, $cssContent);
    echo "Exported $stylePhpFile to $styleCssFile\n";
} else {
    echo "File $stylePhpFile not found\n";
}

// Function to update CSS references in HTML content
function updateCssReferences($content) {
    return str_replace('/style.php', '/css/style.css', $content);
}

$dist = 'dist';
if (!is_dir($dist)) {
    mkdir($dist, 0755, true);
}

foreach ($phpFiles as $phpFile) {
    // Check if the PHP file exists
    if (file_exists($phpFile)) {
        // Start output buffering
        ob_start();
        // Include the PHP file (this executes the PHP code)
        include($phpFile);
        // Get the contents of the buffer
        $htmlContent = ob_get_clean();
                
        // Update CSS references in the content
        $htmlContent = updateCssReferences($htmlContent);

        // Replace .php links with .html links in the content
        $htmlContent = str_replace('.php', '.html', $htmlContent);
        
        // Determine the output HTML file path
        $htmlFile = str_replace('.php', '.html', $phpFile);
        // Save the buffer contents to the HTML file
        file_put_contents($htmlFile, $htmlContent);
        echo "Exported $phpFile to $htmlFile\n";
    } else {
        echo "File $phpFile not found\n";
    }
}
?>

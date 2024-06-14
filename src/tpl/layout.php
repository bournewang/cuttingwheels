<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include __DIR__ . "/../config.php";?>
    <title>High-Quality Cutting and Grinding Wheels | <?= $short_name ?></title>
    <meta name="description" content="Discover top-quality cutting and grinding wheels directly from the factory. Reliable industrial tools for all your needs.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="/style.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main>
        <?= $content; ?>
    </main>
    
    <?php include 'footer.php'; ?>
</body>
</html>

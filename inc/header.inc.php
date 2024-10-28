<?php
if (!isset($imgURL)) {
    $imgURL = './images/pexels-engin-akyurt-1435904.jpg';
}
if (!isset($title)) {
    $title = 'Page';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <title>Culinary Cove &bull; <?php echo $title; ?></title>
</head>

<body>
    <header class="header-with-background" style="background-image: url('<?php echo $imgURL; ?>'); ">
        <h1 class="header">Culinary Cove</h1>
        <p class="header">Your sanctuary for exceptional flavors</p>
        <nav>
            <a <?php if ($title === 'Our mission'): ?> class="active" <?php endif; ?> href="./">Our mission</a>
            <a <?php if ($title === 'Ingredients'): ?> class="active" <?php endif; ?> href="./ingredients.php">Ingredients</a>
            <a <?php if ($title === 'Menu'): ?> class="active" <?php endif; ?> href="./menu.php">Menu</a>
        </nav>
    </header>

    <main>
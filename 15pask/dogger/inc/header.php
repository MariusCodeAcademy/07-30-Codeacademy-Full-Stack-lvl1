<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogger</title>
    <!-- ikeliam open sans srifta is google -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <header>
        <div class="container">
            <a class="logo" href="">
                Dogger
            </a>
            <nav>
                <a class="nav-item <?php if ($currentPage === 'index') echo 'current-page' ?>" href="./index.php">Home</a>
                <a class="nav-item <?php if ($currentPage === 'about') echo 'current-page' ?>" href="./about.php">About</a>
                <a class="nav-item" href="#">Services</a>
                <a class="nav-item" href="#">Contact</a>
            </nav>
            <div class="clearfix"></div>
        </div>
    </header>
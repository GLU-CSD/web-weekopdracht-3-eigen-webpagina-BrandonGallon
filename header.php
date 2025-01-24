<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php"
                        class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a>
                </li>
                <li><a href="about.php"
                        class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About Me</a>
                </li>
                <li><a href="projects.php"
                        class="<?php echo basename($_SERVER['PHP_SELF']) == 'projects.php' ? 'active' : ''; ?>">Projects</a>
                </li>
                <li><a href="contact.php"
                        class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
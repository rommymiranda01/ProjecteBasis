<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url();?>/views/css/main.css">
    <title>Document</title>
</head>
<body>
    <header><h1>Web</h1></header>
    <nav>
        <?php
        include 'templates/navbar.php';
        ?>
    </nav>
    <main>
        <?php
        include $view;
        ?>
    </main>
    <footer>
        <p>Rommy Miranda</p>
    </footer>
</body>
</html>
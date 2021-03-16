<?php include 'lib/path/path.php';

    $viewPath = Path::join(dirname(__DIR__), 'view');

    if (isset($_GET['home'])) {
        $pageTitle = 'Home';
        
        $body = Path::join($viewPath, 'home','home.php');

        include Path::join($viewPath, 'layout', 'layout.php');
    }
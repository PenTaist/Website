<!DOCTYPE html>
<head>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/templates/head.php'; ?>
    <title>Compétences</title>
    <link rel="stylesheet" href="/assets/css/skills.css">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/templates/header.php'; ?>
    <script>document.getElementById('header-skills').classList.add('active');</script>
    <main class="main">
        <div class="container">
            <?php
            
                $category = $_GET['category'];

                if ($category == 'dev') {
                    include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pages/skills/dev.php';
                } elseif ($category == 'networks') {
                    include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pages/skills/networks.php';
                } elseif ($category == 'cyber') {
                    include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pages/skills/cyber.php';
                } else {
                    echo '
                        <a href="?category=dev" class="button cat-dev"><p>Développement</p></a>
                        <a href="?category=networks" class="button cat-networks"><p>Réseaux</p></a>
                        <a href="?category=cyber" class="button cat-cyber"><p>Cyber-Sécurité</p></a>
                    ';
                }
            
            ?>
        </div>
    </main>
</body>
</html>
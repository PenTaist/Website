<!DOCTYPE html>
<head>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/templates/head.php'; ?>
    <title>Projets</title>
    <link rel="stylesheet" href="/assets/css/projects.css">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/templates/header.php'; ?>
    <script>document.getElementById('header-projects').classList.add('active');</script>
    <main class="main">
        <div class="container">
            <a href="https://www.fiberbot.fr/" target="_blank" class="fiberbot">
                <p class="text">FiberBot</p>
                <img src="/src/projects/fiberbot.png" alt="fiberbot" class="logo">
                <p class="desc">Bot Discord</p>
            </a>
            <a href="" class="blockfarmers">
                <p class="text">BlockFarmers</p>
                <img src="/src/projects/blockfarmers.png" alt="blockfarmers" class="logo">
                <p class="desc">Serveur Minecraft (fermé)</p>
            </a>
            <a href="" class="softlightgames">
                <p class="text">SoftLightGames</p>
                <img src="/src/projects/softlightgames.png" alt="softlightgames" class="logo">
                <p class="desc">Site internet</p>
            </a>
        </div>
    </main>
</body>
</html>
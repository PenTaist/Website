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
            <?php
                $get_projects_sql = "SELECT * FROM projects";
                $get_projects_req = $db->query($get_projects_sql);
                $get_projects = $get_projects_req->fetchAll(PDO::FETCH_ASSOC);
                $count_projects = $get_projects_req->rowCount();

                if ($count_projects > 0) {
                    foreach ($get_projects as $project) {
                        $name = $project['name'];
                        $description = $project['description'];
                        $image = $project['image'];
                        $url = $project['url'];

                        if ($url == '#') {
                            $target = "";
                        } else {
                            $target = "_blank";
                        }
                        
                        echo '
                            <a href="'.$url.'" target="'.$target.'" class="'.$name.' project">
                                <p class="text">'.$name.'</p>
                                <img src="'.$image.'" alt="'.$name.'" class="logo">
                                <p class="desc">'.$description.'</p>
                            </a>
                        ';
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>
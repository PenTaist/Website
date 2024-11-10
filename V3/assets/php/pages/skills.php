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
                    $get_skills_sql = "SELECT * FROM skills WHERE enabled = 1";
                    $get_skills_req = $db->query($get_skills_sql);
                    $get_skills = $get_skills_req->fetchAll(PDO::FETCH_ASSOC);
                    $count_skills = $get_skills_req->rowCount();

                    if ($count_skills > 0) {
                        foreach ($get_skills as $skills) {
                            $name = $skills['name'];
                            $front_name = $skills['front_name'];
                            $image = $skills['image'];

                            echo '<a href="category='.$name.'" class="button cat-'.$name.'"><p>'.$front_name.'</p></a>';
                            echo '
                                <style>
                                    .main .container .cat-'.$name.'::before {
                                        background-image: url(\''.$image.'\');
                                    }
                                </style>
                            ';
                        }
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>
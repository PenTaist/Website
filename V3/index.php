<!DOCTYPE html>
<head>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/templates/head.php'; ?>
    <title>Accueil</title>
    <link rel="stylesheet" href="/assets/css/home.css">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/templates/header.php'; ?>
    <script>document.getElementById('header-home').classList.add('active');</script>
    <main class="main">
        <div class="presentation">
            <?php

                $get_presentation_sql = "SELECT * FROM home_general";
                $get_presentation_req = $db->query($get_presentation_sql);
                $get_presentation = $get_presentation_req->fetch(PDO::FETCH_ASSOC);

                $title = $get_presentation['title'];
                $description = preg_replace("/\r\n|\r|\n/", '<br/>', $get_presentation['description']);

                echo '<p class="title">'.$title.'</p>';
                echo '<p class="text">'.$description.'</p>';

            ?>
        </div>
        <div class="social">
            <div class="center">
                <?php
                    $get_networks_sql = "SELECT * FROM home_networks";
                    $get_networks_req = $db->query($get_networks_sql);
                    $get_networks = $get_networks_req->fetchAll(PDO::FETCH_ASSOC);
                    $count_networks = $get_networks_req->rowCount();

                    if ($count_networks > 0) {
                        foreach ($get_networks as $network) {
                            $name = $network['name'];
                            $image = $network['image'];
                            $url = $network['url'];
                            $color = $network['color'];

                            if ($url == '#') {
                                $target = "";
                            } else {
                                $target = "_blank";
                            }

                            echo '
                                <a href="'.$url.'" target="'.$target.'" class="'.$name.' network" style="background-color: '.$color.';">
                                    '.$image.'
                                </a>
                            ';
                        }
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>
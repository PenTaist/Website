<?php

if (!isset($_SESSION['theme']) || empty($_SESSION['theme'])) {
    echo '<link rel="stylesheet" href="/assets/css/colors-dark.css">';
} else {
    if ($_SESSION['theme'] == 'dark') {
        echo '<link rel="stylesheet" href="/assets/css/colors-dark.css">';
    } else {
        echo '<link rel="stylesheet" href="/assets/css/colors-light.css">';
    }
}
<?php
    if(empty($_GET['monan'])) {
        include "menu.php";
    } else {
        $monan = $_GET['monan'];
        include "model.php";
        include "place.php";
    }

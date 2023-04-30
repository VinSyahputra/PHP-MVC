<?php

switch (isset($get['sub_page']) ? $get['sub_page'] : '') {
    case 'home';
        include("front.php");
        break;
    default:
        include("front.php");
        break;
}

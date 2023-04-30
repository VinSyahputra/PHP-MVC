<?php

include('libs/config.php');
// include('libs/func.php');
// include('libs/model.php');



$get = $_GET;
$post = $_POST;
// $session = $_SESSION;

// check if session exist
// if (isset($session) && isset($session['user']) && isset($session['user']['email'])) {
//     $login = LoginWithHash(array());
//     if (count($login) > 0) {
//         switch (isset($get['pages']) ? $get['pages'] : '') {
//             case 'home':
//                 include('pages/dashboard/home.php');
//                 break;

//             default:
//                 include('pages/landing/home.php');
//                 break;
//         }
//     } else {
//         include('pages/login/logout.php');
//     }
// } else {
//     include('pages/login/login.php');
// }

switch (isset($get['pages']) ? $get['pages'] : '') {
    case 'dashboard':
        include("pages/dashboard/home.php");
        break;
    case 'chat':
        include("pages/chat/home.php");
        break;
    case 'landing':
        include("pages/landing/home.php");
        break;
    case 'login':
        include("pages/login/home.php");
        break;
    case 'register':
        include("pages/register/home.php");
        break;

    default:
        include("pages/dashboard/home.php");
        break;
}

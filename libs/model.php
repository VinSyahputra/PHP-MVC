<?php

// function LoginWithHash($parram)
// {
//     global $global_connection;

//     $data = array();
//     $sql =
//         "
//         SELECT * FROM user WHERE email = '" . $parram['email'] . "' AND hash = '" . $parram['hash'] . "'
//         ";

//     $query = mysqli_query($global_connection, $sql);

//     if (mysqli_num_rows($query) > 0) {
//         $data = mysqli_fetch_assoc($query);
//     }

//     return $data;
// }

<?php

$db_host = "localhost";
$db_name = "cms2";
$db_user = "tadasdev";
$db_pass = "tadasdev";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
  echo mysqli_connect_error();
  exit;
}

$sql = "SELECT *
        FROM articles
        ORDER BY published_at;";

/* Select queries return a resultset */
// if ($result = mysqli_query($conn, $sql)) {
//     printf("Select returned %d rows.\n", mysqli_num_rows($result));

//     /* free result set */
//     mysqli_free_result($result);
// }

$results = mysqli_query($conn, $sql);

if ($results === false) {
  echo mysqli_error($conn);
} else {
  $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);

  var_dump($articles);
}
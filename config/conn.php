<?php
define('DB_SERVER','localhost');
define('DB_USER','pohoopmy_chelpslanding');
define('DB_PASS' ,'#*Z]F;T-Hc4w');
define('DB_NAME', 'pohoopmy_chelpslanding');
$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
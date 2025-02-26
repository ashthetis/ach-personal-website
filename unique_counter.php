<?php
$filename = "./unique_visitors.txt";

if (!isset($_COOKIE['unique_visitor'])) {
    // Set a cookie for 30 days
    setcookie("unique_visitor", "yes", time() + (86400 * 30), "/");

    // Read current count
    $count = file_exists($filename) ? (int) file_get_contents($filename) : 0;

    // Increment count
    $count++;

    // Save new count
    file_put_contents($filename, $count);
} else {
    $count = file_exists($filename) ? file_get_contents($filename) : 0;
}

// Output the count
echo $count;
?>

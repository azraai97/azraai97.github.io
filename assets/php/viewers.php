<?php
$counter_file = "view_count.txt";
$count = file_get_contents($counter_file);
$count++;
file_put_contents($counter_file, $count);
echo "This page has been viewed $count times.";
?>

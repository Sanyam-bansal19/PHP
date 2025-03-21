<?php
// 1. time.time(): Returns the current timestamp
echo "Current Time (seconds since epoch): " . time() . "<br>";

// 2. time.ctime(): Converts a timestamp to a human-readable string
echo "Current Time (human-readable): " . date("D M d H:i:s Y") . "<br>";

// 3. time.sleep(): Pauses execution for a given number of seconds
echo "Sleeping for 2 seconds...<br>";
sleep(2);
echo "Awake now!<br>";

// 4. time.strftime() with a specific format: Formats the current time into a string
echo "Formatted Time: " . date("Y-m-d H:i:s") . "<br>";

// 5. time.localtime(): Returns an array with local time details
$current_time = getdate();
echo "Year: " . $current_time['year'] . "<br>";
echo "Month: " . $current_time['mon'] . "<br>";
echo "Day: " . $current_time['mday'] . "<br>";

// Statement as per your preference
echo "This code is executed by Sanyam Bansal";
?>
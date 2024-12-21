<?php
// اجرا و گرفتن خروجی از wmic
$cpuLoad = shell_exec('wmic cpu get loadpercentage 2>&1');

// نمایش بار CPU
if ($cpuLoad) {
    echo 'CPU usage: ' . $cpuLoad . '%<br>';
} else {
    echo 'CPU usage: Unable to retrieve CPU usage<br>';
}

// مصرف حافظه
echo 'Memory usage: ' . memory_get_usage() . ' bytes<br>';
echo 'Peak memory usage: ' . memory_get_peak_usage() . ' bytes<br>';

// فضای دیسک
echo 'Disk free space: ' . disk_free_space("/") . ' bytes<br>';
echo 'Disk total space: ' . disk_total_space("/") . ' bytes<br>';
?>
<?php
$newDateTime = strtotime('2024-12-07 01:56:17'); 

function changeDateTimeRecursively($dir, $newDateTime) {
    $files = scandir($dir);

    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $path = $dir . DIRECTORY_SEPARATOR . $file;

            touch($path, $newDateTime);

            if (is_dir($path)) {
                changeDateTimeRecursively($path, $newDateTime);
            }
        }
    }
}

changeDateTimeRecursively('.', $newDateTime);

echo "Done!\n";
?>

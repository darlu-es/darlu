<?php
    header('Location: https://darlu.es/url/admin/');
    $fh = fopen('/tmp/track.txt', 'a');
    fwrite($fh, $_SERVER['REMOTE_ADDR'] . ' ' . date('c') . "\n");
    fclose($fh);
?>

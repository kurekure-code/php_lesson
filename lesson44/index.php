<?php
    $handle = fopen("text.txt", "w");
    fwrite($handle, "alex" . "\n");
    fwrite($handle, "ben");
?>
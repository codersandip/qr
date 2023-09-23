<?php

exec("php index.php", $output);
file_put_contents('index.html', str_replace("    ", "", $output));
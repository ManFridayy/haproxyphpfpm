<?php
ignore_user_abort(true);
set_time_limit(0);

$delay = random_int(0, 60);
echo "Start {$delay} seconds\n";
sleep($delay);
echo "Finished after {$delay} seconds\n";

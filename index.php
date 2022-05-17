<?php

$submit_log = file_get_contents('./submit.log');

$submit_log = nl2br($submit_log);

echo $submit_log;

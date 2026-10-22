<?php
file_put_contents(
    __DIR__ . '/backend/logs/test.log',
    date('Y-m-d H:i:s') . " — ran!\n",
    FILE_APPEND
);
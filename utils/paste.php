<?php

function paste($file) {
    $dir = str_replace("\utils", "", __DIR__);
    copy($dir."/explain/functions.md", getcwd()."/functions.md");
}
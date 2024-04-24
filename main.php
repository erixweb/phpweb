<?php
require_once __DIR__."/utils/color.php";
require_once __DIR__."/utils/help.php";
require_once __DIR__."/utils/dev.php";
require_once __DIR__."/utils/paste.php";

unset($argv[0]);
$argsLength = count($argv);
if ($argsLength === 0) die(help());

if ($argv[1] === "dev"): dev_server();
elseif ($argv[1] === "paste"): paste("to do");
else: die(help());
endif;

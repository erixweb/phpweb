<?php
function dev_server() {
    echo color("&aIniciando servidor web de PHP &9". PHP_VERSION . "\n");
    echo color("&aPresiona Ctrl + C para parar el servidor\n&f");
    shell_exec("php -S localhost:3000 -t .");
}
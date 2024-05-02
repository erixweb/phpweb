<?php
$commands = array(
    "dev" => "Arranca el servidor por defecto de PHP",
    "paste" => "Pega las clases de PHP"
);

function help()
{
    global $commands;

    echo color("&7-------------------\n&eLISTA DE COMANDOS\n&7-------------------\n");

    foreach (array_keys($commands) as $command) {
        echo color("&e$command&e =>&f $commands[$command]\n");
    }
}
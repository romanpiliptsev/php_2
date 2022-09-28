<?php
function console_command(string $command): string
{
    if ($command == "ls" or $command == "ps" or $command == "id" or $command == "whoami") {
        return system($command);
    }
    else {
        return "<div style='color: red'>Неопознанная команда!</div>\n";
    }
}

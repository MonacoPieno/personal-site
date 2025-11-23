<?php
// let's write the code for read the .env file
function load_env()
{
    $baseDir = __DIR__;

    $path = $baseDir.'/.env';
    echo $path;
    if (!file_exists($path)) {
        throw new Exception(".env file not found: " . $path);
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); //idk if this is the best way to do this

    foreach ($lines as $line) {
        // skip comments
        if (str_starts_with(trim($line), '#')) {
            continue;
        }

        //if not cotain an = that's not a usefull line
        if (!str_contains($line, '=')) {
            continue;
        }

        list($variable_name, $value) = explode('=', $line, 2);

        $variable_name = trim($variable_name);
        $value = trim($value);

        //store inseide enviroment
        $_ENV[$variable_name] = $value;
        putenv("$variable_name=$value");
    }
}
?>
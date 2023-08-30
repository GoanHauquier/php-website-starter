<?php

    function d($var)
    {
        var_dump($var);
    }

    function dd($var)
    {
        var_dump($var);
        die;
    }

    function defineEnv(string $name, mixed $value)
    {
        putenv("$name=$value");
    }

    function getEnvVariable($name)
    {
        return getenv($name);
    }

    function jsonOutput($data)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

    function href(string $path)
    {
        $baseUri = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

        // if working on local
        if (getEnvVariable('DEBUG_MODE')) {
            $baseUri = $baseUri . getEnvVariable('ROOT_DIRECTORY') . '/';
        }

        return $baseUri . $path;
    }
?>
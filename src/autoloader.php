<?php

/**
 * Class autoloader
 *
 * Diese Datei läd automatisch die PHP Scripte.
 */
class autoloader
{
    public static function findClass($class)
    {
        if ($file = self::findFile($class)) {
            include $file;

            return true;
        }
    }

    protected function findFile($class)
    {
        $filepath = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        $filepath .= '.php';

        if (preg_match('~^'.DIRECTORY_SEPARATOR.'~', $filepath)) {
            $filepath = '.' . $filepath;
        }

        $filepath = __DIR__ . DIRECTORY_SEPARATOR . $filepath;

        if (file_exists($filepath)) {
            return $filepath;
        }

        return '';
    }
}

spl_autoload_register(['autoloader', 'findClass'], true, true);

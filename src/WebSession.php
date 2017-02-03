<?php
/**
 * Class WebSession
 *
 * Diese klasse kümmert sich nur um die Sessions
 *
 * Vorausgesetzt der Browser unterstützt Cookies :-)
 */
class WebSession
{
    /**
     * Startet die Session mit PHP SessionHandler
     */
    public function starten()
    {
        $result = session_start([
            'name' => 'FASTFOOD',
            'use_cookies' => true,
        ]);

        if ($result == false) {
            die("Session konnte nicht gestartet werden :-(");
        }
    }

    public function read($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }

    public function write($key, $value)
    {
        $_SESSION[$key] = $value;
    }
}
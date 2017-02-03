<?php

namespace Controller;


class MitarbeiterPage
{

    /**
     * @var array
     */
    protected static $errors = [];

    /**
     * Gibt an ob der User eingelogt ist oder nicht
     *
     * @return string
     */
    public function status()
    {
        return 'Nicht eingeloggt';
    }

    /**
     * Bestimmt ob es einen Fehler gibt.
     *
     * @return bool
     */
    public function hasError()
    {
        if (count(self::$errors) > 0) {
            return true;
        }
        return false;
    }

    /**
     * @param \WebSession $webSession
     */
    public function login($webSession)
    {
        if ($this->UserUeberpruefen()) {
            // Login bestanden
        }
    }

    /**
     * Prüft die Formular daten, wenn sie Okay sind ist der User eingeloggt
     *
     * @return bool
     */
    public function UserUeberpruefen()
    {
        // Prüft ob es Fromular einträge gibt
        if (isset($_POST['email']) == false || empty($_POST['email'])) {
            self::$errors[] = 'Fehler keine Email Adresse vorhanden';
        }
        if (isset($_POST['password']) == false || empty($_POST['password'])) {
            self::$errors[] = 'Fehler keine Passwort vorhanden';
        }

        // Wenn es fehler gab, dann ist diese User Überprüfung fehl geschlagen.
        if ($this->hasError()) {
            return false;
        }

        return true;
    }

}
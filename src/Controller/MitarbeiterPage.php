<?php

namespace Controller;


class MitarbeiterPage
{

    /**
     * Eine Liste aller User mit passwort
     * @var array
     */
    protected $users = [
        'fritz@cola.de' => 'NaDuPasswort'
    ];

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
        global $webSession;
        $isLogin = $webSession->read('user-login');
        if ($isLogin == true) {
            return "Du bist eingelogt";
        }
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
            $webSession->write('user-login', true);
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

        $email    = $_POST['email'];
        $password = $_POST['password'];

        // Überprüfen ob der User existiert
        if (isset($this->users[$email]) == false) {
            self::$errors[] = 'Fehler Email Adresse wurde nicht registriert';
            return false;
        }

        // Übperprüfen ob das Passwort stimmt
        if ($this->users[$email] != $password) {
            self::$errors[] = 'Passwort ist Falsch';
            return false;
        }

        // Wenn bis jetzt kein Fehler auf getreten ist das stimmt wohl alles
        return true;
    }

}
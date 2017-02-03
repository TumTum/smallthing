<?php

namespace Controller;


class MitarbeiterPage
{
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
        return false;
    }
}
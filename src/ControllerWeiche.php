<?php

/**
 * Class ControllerWeiche
 *
 * wenn Formulare abgeschossen werden, damit sie richtig um geleitet werden.
 */
class ControllerWeiche
{

    /**
     * @var WebSession
     */
    protected $webSession;

    public function __construct($webSession)
    {
        $this->webSession = $webSession;
    }

    public function starten()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['controller_form'])) {
            $this->weiche();
        }
    }

    /**
     * Die Weiche
     */
    protected function weiche()
    {
        $wunsch_controller = $_POST['controller_form'];
        switch ($wunsch_controller) {
            case 'mitarbeiterPage.login':
                $mitarbeiterPage = new \Controller\MitarbeiterPage();
                $mitarbeiterPage->login($this->webSession);
                break;
        }
    }
}
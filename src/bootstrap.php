<?php

include_once "autoloader.php";

// Bei jedem Starten der Webseite ist es wichtig die Session zu starten
$webSession = new WebSession();
$webSession->starten();

$controllerWeiche = new ControllerWeiche($webSession);
$controllerWeiche->starten();

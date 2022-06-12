<?php

use Julian\Aufgabe\Message;
use TYPO3Fluid\Fluid\View\TemplateView;

require_once('vendor/autoload.php');

$view = new TemplateView();

$paths = $view->getTemplatePaths();
$paths->setTemplatePathAndFilename('templates/main.html');

$view->assignMultiple([
    'message' => Message::getRandomMessage()->getMessage(),
]);

if (isset($_POST['action']) && $_POST['action'] == 'new') {
    echo Message::getRandomMessage()->getMessage();
} else {
    echo $view->render();
}



?>
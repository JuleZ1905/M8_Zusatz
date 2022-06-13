<?php

use Julian\Aufgabe\Message;
use TYPO3Fluid\Fluid\View\TemplateView;

require('vendor/autoload.php');

$view = new TemplateView();

$paths = $view->getTemplatePaths();
$paths->setTemplatePathAndFilename('templates/add.html');


if (isset($_POST['submit']) && isset($_POST['new-message'])) {
    $check = Message::addMessage($_POST['new-message']);
    if ($check) {
        header('Location: index.php');
    } else {
        $view->assign('error', 'Error: Message already exists, try again');
        echo $view->render();
    }
} else {
    echo $view->render();
}

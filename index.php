<?php

use TYPO3Fluid\Fluid\View\TemplateView;

require('vendor/autoload.php');

$view = new TemplateView();

$paths = $view->getTemplatePaths();
$paths->setTemplatePathAndFilename('templates/main.html');

echo $view->render();

?>
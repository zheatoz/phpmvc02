<?php
//
// PHASE: BOOTSTRAP
//
define('MCLARY_INSTALL_PATH', dirname(__FILE__));
define('MCLARY_SITE_PATH', MCLARY_INSTALL_PATH . '/site');

require(MCLARY_INSTALL_PATH.'/src/Cmclary/bootstrap.php');

$mc = Cmclary::Instance();
//
// PHASE: FRONTCONTROLLER ROUTE
//
$mc->FrontControllerRoute();
//
// PHASE: THEME ENGINE RENDER
//
$mc->ThemeEngineRender();

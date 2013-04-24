<?php
// ---------------------------------------------------------
// PHASE: BOOTSTRAP är initieringsfasen där de oundvikliga grunderna etableras 
// och defineras. Dessa behövs i varje förfrågan. 
// ---------------------------------------------------------
define('GRINGO_INSTALL_PATH', dirname(__FILE__));
define('GRINGO_SITE_PATH', GRINGO_INSTALL_PATH . '/site');	// 'site' = mappen där den aktuella sidans eget innehåll hamnar. resten är gemensamt ramverk som återanvänds 

require(GRINGO_INSTALL_PATH.'/src/CGringo/bootstrap.php');

$gr = CGringo::Instance();

// ---------------------------------------------------------
// PHASE: FRONTCONTROLLER ROUTE tar hand om förfrågan och tolkar ut vilken kontroller 
// och metod som skall anropas. Därefter sker all bearbetning i kontrollern
//---------------------------------------------------------
$gr->FrontControllerRoute();


//---------------------------------------------------------
// PHASE: THEME ENGINE RENDER skapar själva slutresultatet, webbsidan. Allt innehåll 
// finns tillgängligt och med hjälp av template-filer överförs innehållet till HTML-filer.
//---------------------------------------------------------
$gr->ThemeEngineRender();

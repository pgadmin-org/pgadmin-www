<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: How to contribute");
$PAGE_CONTENT = '

<h1>' . _("How to contribute") . '</h1>

<p>' . _("pgAdmin is a voluntary project created and managed by contributors from around the world. The project can only live and develop with your help. Do not hesitate to get involved.") . '</p>

<h2>' . _("Development") . '</h2>

<p>' . _("If you would like to contribute new features and/or bug fixes, please visit the <a href=\"development/\">development</a> page.") . '</p> 

<h2>' . _("Translation") . '</h2>

<p>' . _("We need help to translate pgAdmin and our website to as many languages as possible for the benefit of our worldwide userbase. If you think you can help us, please visit the <a href=\"translation/\">translation</a> page.") . '</p> 

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

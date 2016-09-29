<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin 4: Download - Windows&trade;");
$PAGE_CONTENT = '

<h1>' . _("Windows&trade;") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Dave Page") . '</h4>

<p>' . _("pgAdmin is available for Windows&trade; 7 (desktop) or 2008R2 (server). The packages below include both the Desktop Runtime and Web Application:") . '</p>

<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin3/pgadmin4/v1.0/windows/", "1.0") . '<br />&nbsp;</li>
</ul>

<p>' . _("To install these packages, simply download and run the installer.") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

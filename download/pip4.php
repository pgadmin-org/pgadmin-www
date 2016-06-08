<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin 4: Download - Python wheel (PIP)");
$PAGE_CONTENT = '

<h1>' . _("Python wheel (PIP)") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Dave Page") . '</h4>

<p><b>' . _("WARNING: This is BETA software that should not be used for production purposes.") . '</b></p>

<p>' . _("A Python wheel is available for those wishing to run pgAdmin as a web application in a Python environment. Note that the packages do not include the Desktop Runtime.") . '</p>

<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin3/pgadmin4/v1.0-beta1/pip/", "1.0-beta1") . '<br />&nbsp;</li>
</ul>

<p>' . _("To install, download the wheel and install with a command such as <code>pip install ./pgadmin4-1.0_beta1-py2-none-any.whl</code>. It is strongly recommended that a Python Virtual Environment is used.") . '</p>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

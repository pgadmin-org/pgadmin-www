<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin 4: Download - Python wheel (PIP)");
$PAGE_CONTENT = '

<h1>' . _("Python wheel (PIP)") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Dave Page") . '</h4>

<p>' . _("A Python wheel is available for those wishing to run pgAdmin as a web application in a Python environment. Note that the packages do not include the Desktop Runtime.") . '</p>

<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin3/pgadmin4/v1.3/pip/", "1.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin3/pgadmin4/v1.2/pip/", "1.2") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin3/pgadmin4/v1.1/pip/", "1.1") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin3/pgadmin4/v1.0/pip/", "1.0") . '<br />&nbsp;</li>
</ul>

<p>' . _("To install, download the wheel and install with a command such as <code>pip install ./pgadmin4-1.3-py2.py3-none-any.whl</code>. It is strongly recommended that a Python Virtual Environment is used.") . '</p>

<p>' . _("pgAdmin can now be run with a command like <code>python ~/pgadmin4/lib/python2.7/site-packages/pgadmin4/pgAdmin4.py</code> (assuming you use a virtual environment at ~/pgadmin4). Finally, point your browser to <i>http://127.0.0.1:5050</i>.") . '</p>

<p>' . _("Please see the <a href=\"/docs4/dev/server_deployment.html\">online documentation</a> for information on deploying pgAdmin 4 behind a web server.") . '</p>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin 4: Download - Python wheel (PIP)");
$PAGE_CONTENT = '

<h1>' . _("Python wheel (PIP)") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Dave Page") . '</h4>

<p><b>' . _("WARNING: This is BETA software that should not be used for production purposes.") . '</b></p>

<p>' . _("A Python wheel is available for those wishing to run pgAdmin as a web application in a Python environment. Note that the packages do not include the Desktop Runtime.") . '</p>

<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin3/pgadmin4/v1.0-beta2/pip/", "1.0-beta2") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin3/pgadmin4/v1.0-beta1/pip/", "1.0-beta1") . '<br />&nbsp;</li>
</ul>

<p>' . _("To install, download the wheel and install with a command such as <code>pip install ./pgadmin4-1.0_beta1-py2-none-any.whl</code>. It is strongly recommended that a Python Virtual Environment is used.") . '</p>

<p>' . _("Once installed, you will need to create a <i>config_local.py</i> file in the same directory as <i>config.py</i>. On a machine with a virtual environment created at <i>~/pgadmin4</i>, this is <i>~/pgadmin4/lib/python2.7/site-packages/pgadmin4</i>. Ensure you set values for the SECRET_KEY, SECURITY_PASSWORD_SALT and CSRF_SESSION_KEY settings at bare minimum - see <i>config.py</i> for more information and other settings that can be customised. In order to reference other variables from <i>config.py</i>, you may need to include <code>from config import *</code> at the top of <i>config_local.py</i>.</p>") . '</p>

<p>' . _("pgAdmin can now be run with a command like <code>python ~/pgadmin4/lib/python2.7/site-packages/pgadmin4/pgAdmin4.py</code>. Finally, point your browser to <i>http://127.0.0.1:5050</i>.") . '</p>

<p>' . _("Please see the <a href=\"/docs4/dev/server_deployment.html\">online documentation</a> for information on deploying pgAdmin 4 behind a web server.") . '</p>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Download - pgAgent");
$PAGE_CONTENT = '

<h1>' . _("pgAgent") . '</h1>

<p>' . _("pgAgent is a job scheduler for PostgreSQL which may be managed using pgAdmin. Prior to pgAdmin v1.9, pgAgent shipped as part of pgAdmin. From pgAdmin v1.9 onwards, pgAgent is shipped as a separate application.") . '</p>

<p>' . _("pgAgent is available as a StackBuilder add-on package if you use <a href=\"http://www.enterprisedb.com/products-services-training/pgdownload\">EDB's Installers</a> for Windows, Mac and Linux, as a Debian package from <a href=\"https://apt.postgresql.org/\">apt.postgresql.org</a>, or an RPM package from <a href=\"https://yum.postgresql.org/\">yum.postgresql.org</a>. Alternatively, source packages can be download below.") . '</p>

<ul>
  <li>' . sprintf(_("<a href=\"%s\">Download pgAgent</a>"), "https://www.postgresql.org/ftp/pgadmin/pgagent/") . '<br />&nbsp;</li>
</ul>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

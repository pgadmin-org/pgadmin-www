<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: PostgreSQL administration and management tools");
$PAGE_CONTENT = '

<h1>' . _("Latest news") . '</h1>

<h2>' . sprintf(_("%s - pgAdmin 4 v%s released"), "2017-03-10", "1.3") . '</h2>

<p>' . _("The pgAdmin Development Team are pleased to announce the release of pgAdmin 4 version 1.3. This is the third release of pgAdmin 4, and includes over 30 bug fixes and improvements. For details, please see the <a href=\"https://redmine.postgresql.org/versions/46\">issue tracker roadmap</a>.") . '</p>

<p>' . _("For more information, checkout the <a href=\"/docs4/dev/index.html\">online documentation</a>, the screenshots below, and of course the <a href=\"/download\">download page</a>.") . '</p>

<h2>' . sprintf(_("%s - pgAdmin 4 v%s released"), "2017-02-10", "1.2") . '</h2>

<p>' . _("The pgAdmin Development Team are pleased to announce the release of pgAdmin 4 v1.2. This is the third release of pgAdmin 4, and includes nearly 90 bug fixes and improvements over the previous version. For details, please see the <a href=\"https://redmine.postgresql.org/versions/45\">issue tracker roadmap</a>.") . '</p>

<p>' . _("For more information, checkout the <a href=\"/docs4/dev/index.html\">online documentation</a>, the screenshots below, and of course the <a href=\"/download\">download page</a>.") . '</p>

<h2>' . sprintf(_("%s - pgAdmin 4 v%s released"), "2016-10-27", "1.1") . '</h2>

<h2>' . sprintf(_("%s - pgAdmin 4 v%s released"), "2016-09-29", "1.0") . '</h2>

<p>' . _("After over 10,000 hours of development work, pgAdmin 4 v1.0 is finally available for download! Visit the <a href=\"/download\">download page</a> to get your copy, or download the <a href=\"http://www.enterprisedb.com/products-services-training/pgdownload\">PostgreSQL 9.6 installers</a> from <a href=\"http://www.enterprisedb.com/\">EDB</a>.") . '</p>

<p>' . _("pgAdmin 4 is a complete rewrite of pgAdmin, built using Python and Javascript/jQuery. A desktop runtime written in C++ with Qt allows it to run standalone for individual users, or the web application code may be deployed directly on a webserver for use by one or more users through their web browser. The software has the look and feel of a desktop application whatever the runtime environment is, and vastly improves on pgAdmin III with updated user interface elements, multi-user/web deployment options, dashboards and a more modern design.") . '</p>

<p>' . _("For more information, checkout the <a href=\"/docs4/dev/index.html\">online documentation</a>, the screenshots below, and of course the <a href=\"/download\">download page</a>.") . '</p>

<center>
  <a href="images/pgadmin4-welcome.png"><img width="150" src="images/pgadmin4-welcome.png" alt="pgAdmin 4 welcome screen" /></a>
  <a href="images/pgadmin4-dashboard.png"><img width="150" src="images/pgadmin4-dashboard.png" alt="pgAdmin 4 server dashboard" /></a>
  <a href="images/pgadmin4-properties.png"><img width="150" src="images/pgadmin4-properties.png" alt="pgAdmin 4 object properties" /></a>
  <a href="images/pgadmin4-help.png"><img width="150" src="images/pgadmin4-help.png" alt="pgAdmin 4 embedded help links" /></a>
  <br />
  <a href="images/pgadmin4-viewdata.png"><img width="150" src="images/pgadmin4-viewdata.png" alt="pgAdmin 4 query tool and data editor" /></a>
  <a href="images/pgadmin4-explain.png"><img width="150" src="images/pgadmin4-explain.png" alt="pgAdmin 4 graphical explain" /></a>
  <a href="images/pgadmin4-debugger.png"><img width="150" src="images/pgadmin4-debugger.png" alt="pgAdmin 4 procedural language debugger" /></a>
  <a href="images/pgadmin4-runtime.png"><img width="150" src="images/pgadmin4-runtime.png" alt="pgAdmin 4 desktop runtime and dockable UI" /></a>
</center>

<h1>' . _("Introduction") . '</h1>

<p>' . _("pgAdmin is the most popular and feature rich Open Source administration and development platform for <a href=\"https://www.postgresql.org/\">PostgreSQL</a>, the most advanced Open Source database in the world. The application may be used on Linux, FreeBSD, Solaris, macOS and Windows platforms to manage PostgreSQL 9.2 and above running on any platform, as well as commercial and derived versions of PostgreSQL such as <a href=\"http://www.enterprisedb.com/\">EDB Postgres Advanced Server</a>.") . '</p>

<p>' . _("pgAdmin is designed to answer the needs of all users, from writing simple SQL queries to developing complex databases. The graphical interface may be run on the desktop or on a web server and supports all common PostgreSQL features. The application includes a syntax highlighting SQL editor.") . '</p>

<p>' . _("pgAdmin is developed by a community of PostgreSQL experts around the world. It is Free Software released under the <a href=\"licence.php\">PostgreSQL License</a>.") . '</p>

<div class="pgaBanner">
' . sprintf(_("The current version of pgAdmin is <a href=\"/download/\">pgAdmin 4 v%s</a>."), "1.3") . '
</div>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

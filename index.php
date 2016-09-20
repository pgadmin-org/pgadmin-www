<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: PostgreSQL administration and management tools");
$PAGE_CONTENT = '

<h1>' . _("Latest news") . '</h1>

<h2>' . sprintf(_("%s - pgAdmin v%s released for testing"), "2016-09-02", "1.0 RC 1") . '</h2>

<p>' . _("Hot on the heels of the betas, pgAdmin 4 v1.0 Release Candidate 1 is now available for testing! Visit the <a href=\"/download\">download page</a> to get your copy, and check out the changes <a href=\"https://redmine.postgresql.org/versions/36\">here</a>.") . '</p>

<h2>' . sprintf(_("%s - pgAdmin v%s released for testing"), "2016-06-07", "1.0 Beta 1") . '</h2>

<p>' . _("After close to 10,000 hours of development work, pgAdmin 4 v1.0 Beta 1 is finally available for testing! Visit the <a href=\"/download\">download page</a> to try it out.") . '</p>

<p>' . _("pgAdmin 4 is a complete rewrite of pgAdmin, built using Python and Javascript/jQuery. A desktop runtime written in C++ with Qt allows it to run standalone for individual users, or the web application code may be deployed directly on a webserver for use by one or more users through their web browser. The application has the look and feel of a modern desktop application whatever the runtime environment is, and vastly improves on pgAdmin 3 with improved user interface elements, multi-user/web deployment options, dashboards and a much more modern design.") . '</p>

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

<h2>' . sprintf(_("%s - pgAdmin v%s released"), "2016-02-11", "1.22.1") . '</h2>

<p>' . _("pgAdmin 1.22.1 has been released, offering a number of bug fixes over the previous version. The list of bug fixes is available in the <a href=\"/development/changelog.php\">CHANGELOG</a>. Please visit the <a href=\"download\">download area</a> to get your copy, or alternatively download a <a href=\"http://www.enterprisedb.com/products-services-training/pgdownload#windows\">PostgreSQL 9.5.1 Installer</a> which includes pgAdmin.") . '</p>

<h2>' . sprintf(_("%s - pgAdmin v%s available"), "2016-01-08", "1.22.0") . '</h2>

<p>' . _("pgAdmin 1.22 has been released, offering new features, bug fixes and support for PostgreSQL 9.5. The list of new features and fixes is available in the <a href=\"/development/changelog.php\">CHANGELOG</a>. Please visit the <a href=\"download\">download area</a> to get your copy, or alternatively download a <a href=\"http://www.enterprisedb.com/products-services-training/pgdownload\">PostgreSQL 9.5 Installer</a> which includes pgAdmin.") . '</p>

<h2>' . sprintf(_("%s - pgAdmin demo video"), "2010-04-09") . '</h2>

<p>' . _("Gary at <a href=\"http://www.enterprisedb.com/\">EnterpriseDB</a> has produced a <a href=\"http://www.enterprisedb.com/resources-community/webcasts-podcasts-videos/videos/how-create-postgres-database-using-pgadmin\">video walkthrough</a> showing off some of the features in pgAdmin.") . '</p>

<h1>' . _("Introduction") . '</h1>

<p>' . sprintf(_("pgAdmin is the most popular and feature rich Open Source administration and development platform for <a href=\"%s\">PostgreSQL</a>, the most advanced Open Source database in the world. The application may be used on Linux, FreeBSD, Solaris, Mac OSX and Windows platforms to manage PostgreSQL 7.3 and above running on any platform, as well as commercial and derived versions of PostgreSQL such as <a href=\"%s\">Postgres Plus Advanced Server</a> and <a href=\"%s\">Greenplum database</a>."), "https://www.postgresql.org/", "http://www.enterprisedb.com", "http://www.greenplum.com/") . '</p>

<p>' . sprintf(_("pgAdmin is designed to answer the needs of all users, from writing simple SQL queries to developing complex databases. The graphical interface supports all PostgreSQL features and makes administration easy. The application also includes a syntax highlighting SQL editor, a server-side code editor, an SQL/batch/shell job scheduling agent, support for the <a href=\"%s\">Slony-I</a> replication engine and much more. Server connection may be made using TCP/IP or Unix Domain Sockets (on *nix platforms), and may be SSL encrypted for security. No additional drivers are required to communicate with the database server."), "http://slony.info/") . '</p>

<p>' . sprintf(_("pgAdmin is developed by a community of PostgreSQL experts around the world and is available in more than a dozen languages. It is Free Software released under the <a href=\"%s\">PostgreSQL License</a>."), "licence.php") . '</p>

<div class="pgaBanner">
' . sprintf(_("The current version of pgAdmin is <a href=\"/download/\">pgAdmin 3 v%s</a>."), "1.22.1") . '
</div>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Screenshots - Introduction");
$PAGE_CONTENT = '

<h1>' . _("Introduction") . '</h1>

<p>' . _("pgAdmin is a comprehensive design and management interface for PostgreSQL databases, designed to run on most operating systems.") . '</p>

<p>' . _("To view a full size version of any screenshot, simply click on it. In addition to the those found in this section additional images can also be found in the <a href=\"../docs/\">online documentation</a>.") . '</p>

<center>
  <a href="../images/pgadmin4-welcome.png"><img width="150" src="../images/pgadmin4-welcome.png" alt="pgAdmin 4 welcome screen" /></a>
  <a href="../images/pgadmin4-dashboard.png"><img width="150" src="../images/pgadmin4-dashboard.png" alt="pgAdmin 4 server dashboard" /></a>
  <a href="../images/pgadmin4-properties.png"><img width="150" src="../images/pgadmin4-properties.png" alt="pgAdmin 4 object properties" /></a>
  <a href="../images/pgadmin4-help.png"><img width="150" src="../images/pgadmin4-help.png" alt="pgAdmin 4 embedded help links" /></a>
  <br />
  <a href="../images/pgadmin4-viewdata.png"><img width="150" src="../images/pgadmin4-viewdata.png" alt="pgAdmin 4 query tool and data editor" /></a>
  <a href="../images/pgadmin4-explain.png"><img width="150" src="../images/pgadmin4-explain.png" alt="pgAdmin 4 graphical explain" /></a>
  <a href="../images/pgadmin4-debugger.png"><img width="150" src="../images/pgadmin4-debugger.png" alt="pgAdmin 4 procedural language debugger" /></a>
  <a href="../images/pgadmin4-runtime.png"><img width="150" src="../images/pgadmin4-runtime.png" alt="pgAdmin 4 desktop runtime and dockable UI" /></a>
</center>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

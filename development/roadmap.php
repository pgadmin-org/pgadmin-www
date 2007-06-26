<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Development - Roadmap");
$PAGE_CONTENT = '

<h1>' . _("Roadmap") . '</h1>

<p>' . sprintf(_("This roadmap outlines the work that is hoped will be done in the %s development cycle for release in version %s of pgAdmin."), "1.9", "1.10") . '</p>

<ul>
  <li>' . _("PostgreSQL 8.4 compatibility (these items are subject to change)") . '<br />&nbsp;
    <ul>
      <li>' . _("To be determined...") . '<br />&nbsp;</li>
    </ul>
  </li>

  <li>' . _("Code housekeeping") . '<br />&nbsp;
    <ul>
      <li>' . _("Check for and remove any custom controls that are now implemented in wxWidgets.") . '<br />&nbsp;</li>
      <li>' . _("Move pgAgent into a standalone package that can be released on it's own schedule.") . '<br />&nbsp;</li>
    </ul>
  </li>

  <li>' . _("Build system") . '<br />&nbsp;
    <ul>
      <li><del>' . _("Consider cross-platform build systems such as cmake to generate the build system for all platforms") . '<br />&nbsp;</li>
    </ul>
  </li>

  <li>' . _("Functionality") . '<br />&nbsp;
    <ul>
      <li>' . _("Add DROP/REASSIGN OWNED support. [GL]") . '<br />&nbsp;</li>
      <li>' . _("Logfile tab on server status window : multiple columns and filtering. [GL]") . '<br />&nbsp;</li>
      <li>' . _("ER diagramming tool (Google SoC project). [Euler Taveira de Oliveira]") . '<br />&nbsp;</li>
      <li>' . _("Query Tool SQL macros [ksmigrod]") . '<br />&nbsp;</li>
      <li>' . _("Redesign Table dialogue to remove sub-dialogues where possible and replace with grid style UI [DP]") . '<br />&nbsp;</li>
      <li>' . _("Support for integrated tsearch configuration in PG 8.3+") . '<br />&nbsp;</li>
      <li>' . _("Data tune-up options for slow queries (requires XML EXPLAIN in PG 8.4) [DP]") . '<br />&nbsp;</li>
      <li>' . _("pgsql-performance report tool for problematic queries (requires XML EXPLAIN in PG 8.4 [DP])") . '<br />&nbsp;</li>
    </ul>
  </li>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

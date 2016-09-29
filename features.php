<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Feature");
$PAGE_CONTENT = '

<h1>' . _("Features") . '</h1>

<p>' . sprintf(_("pgAdmin has a huge array of features and by far the best way to see them all is to <a href=\"%s\">download</a> a copy and give it a try. Here's a brief list to give you an idea of its capabilities:"), "download/") . '</p>

<h2>' . _("Multiplatform") . '</h2>
<ul>
  <li>' . _("Microsoft Windows &trade;") . '</li>
  <li>' . _("Linux") . '</li>
  <li>' . _("macOS") . '</li>
</ul>

<h2>' . _("Designed for multiple PostgreSQL versions and derivatives") . '</h2>
<ul>
  <li>' . _("PostgreSQL 9.2 and above") . '</li>
  <li>' . _("EDB Postgres Advanced Server 9.2 and above") . '</li>
</ul>

<h2>' . _("Extensive documentation") . '</h2>
<ul>
  <li>' . _("pgAdmin application documentation") . '</li>
  <li>' . _("PostgreSQL documentation links") . '</li>
</ul>

<h2>' . _("Multiple deployment models") . '</h2>
<ul>
  <li>' . _("Desktop mode, using a purpose built runtime") . '</li>
  <li>' . _("Server mode, supporting multiple users over the web") . '</li>
</ul>

<h2>' . _("Tools") . '</h2>
<ul>
  <li>' . _("Powerful query tool with colour syntax highlighting") . '</li>
  <li>' . _("Fast datagrid for display/entry of data") . '</li>
  <li>' . _("Graphical query plan display") . '</li>
  <li>' . _("Grant Wizard for rapid updates to ACLs") . '</li>
  <li>' . _("Procedural language debugger (supporting pl/pgsql and edb-spl)") . '</li>
</ul>

<h2>' . _("Routine maintenance") . '</h2>
<ul>
  <li>' . _("Auto-vacuum management") . '</li>
  <li>' . _("Monitoring dashboard") . '</li>
  <li>' . _("Backup, restore, vacuum and analyze on demand") . '</li>
  <li>' . _("SQL/shell/batch job scheduling agent") . '</li>
</ul>

<h2>' . _("Create, view and edit all common PostgreSQL objects") . '</h2>
<p>' . _("Objects are displayed with their SQL definition, and a user friendly list of properties. Dependent, and dependency objects may also be browsed, and object statistics viewed where appropriate.") . '</p>
<ul>
  <li>' . _("Aggregates") . '</li>
  <li>' . _("Casts") . '</li>
  <li>' . _("Columns") . '</li>
  <li>' . _("Constraints") . '</li>
  <li>' . _("Databases") . '</li>
  <li>' . _("Domains") . '</li>
  <li>' . _("Foreign tables") . '</li>
  <li>' . _("Foreign servers") . '</li>
  <li>' . _("Foreign data wrappers") . '</li>
  <li>' . _("FTS configurations") . '</li>
  <li>' . _("FTS dictionaries") . '</li>
  <li>' . _("FTS parsers") . '</li>
  <li>' . _("FTS templates") . '</li>
  <li>' . _("Functions") . '</li>
  <li>' . _("Indexes") . '</li>
  <li>' . _("Languages") . '</li>
  <li>' . _("Materialized views") . '</li>
  <li>' . _("Roles") . '</li>
  <li>' . _("Rules") . '</li>
  <li>' . _("Procedural languages") . '</li>
  <li>' . _("Schemas") . '</li>
  <li>' . _("Sequences") . '</li>
  <li>' . _("Tables") . '</li>
  <li>' . _("Tablespaces") . '</li>
  <li>' . _("Trigger functions") . '</li>
  <li>' . _("Types") . '</li>
  <li>' . _("Views") . '</li>
  <li>' . _("EDB Postgres Advanced Server objects (such as packages, procedures and synonyms)") . '</li>
  <li>' . _("pgAgent objects (such as jobs, schedules)") . '</li>
</ul>

<h2>' . _("Multibyte support") . '</h2>
<p>' . _("pgAdmin supports most PostgreSQL server-side encodings:") . '</p>
<ul>
  <li>' . _("SQL_ASCII") . '</li>
  <li>' . _("EUC_JP, EUC_CN, EUC_KR, EUC_TW") . '</li>
  <li>' . _("JOHAB") . '</li>
  <li>' . _("LATIN1, LATIN2, LATIN3, LATIN4, LATIN5, LATIN6, LATIN7, LATIN8, LATIN9, LATIN10") . '</li>
  <li>' . _("ISO_8859_5, ISO_8859_6, ISO_8859_7, ISO_8859_8") . '</li>
  <li>' . _("UNICODE/UTF-8") . '</li>
  <li>' . _("MULE_INTERNAL") . '</li>
  <li>' . _("KOI8") . '</li>
  <li>' . _("WIN") . '</li>
  <li>' . _("ALT") . '</li>
  <li>' . _("WIN1256") . '</li>
  <li>' . _("TCVN") . '</li>
  <li>' . _("WIN874") . '</li>
</ul>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin 4: Download - Source code");
$PAGE_CONTENT = '

<h1>' . _("Source code") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Dave Page") . '</h4>

<p>' . _("Source tarballs are available for users wishing to compile their own copy of pgAdmin 4, or those using platforms for which we do not supply prebuilt packages.") . '</p>

<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin3/pgadmin4/v1.0/source/", "1.0") . '<br />&nbsp;</li>
</ul>

<p>' . _("Build instructions are included in the tarballs, and are available online:") . '</p>

<ul>
  <li>' . sprintf(_("<a href=\"%s\">v%s instructions</a>"), "https://git.postgresql.org/gitweb/?p=pgadmin4.git;a=blob;f=README", "1.0") . '<br />&nbsp;</li>
</ul>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

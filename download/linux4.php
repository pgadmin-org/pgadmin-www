<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin 4: Download - Linux");
$PAGE_CONTENT = '

<h1>' . _("Linux - Redhat &amp derivatives") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Devrim Gündüz") . '</h4>

<p><b>' . _("WARNING: This is pre-release software that should not be used for production purposes.") . '</b></p>

<p>' . sprintf(_("RPMs for various Redhat and derivative distributions are available from the PostgreSQL <a href=\"%s\">Yum repository</a>."), "http://yum.postgresql.org/") . '</p>

<p>' . sprintf(_("Please see the <a href=\"%s\">Yum HOWTO</a> for details on installing these packages. Note that they are currently only available in the PostgreSQL 9.6 repos."), "http://yum.postgresql.org/howtoyum.php") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

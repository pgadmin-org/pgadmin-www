<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin 4: Download - Linux");
$PAGE_CONTENT = '

<h1>' . _("Linux - Redhat &amp derivatives") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Devrim Gündüz") . '</h4>

<p>' . _("RPMs for various Redhat and derivative distributions are available from the PostgreSQL <a href=\"https://yum.postgresql.org/\">Yum repository</a>.") . '</p>

<p>' . _("Please see the <a href=\"http://yum.postgresql.org/howtoyum.php\">Yum HOWTO</a> for details on installing these packages.") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

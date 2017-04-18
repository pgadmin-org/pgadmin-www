<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Download - Introduction");
$PAGE_CONTENT = '

<h1>' . _("Introduction") . '</h1>

<p>' . _("pgAdmin is a free software project released under the <a href=\"../licence.php\">PostgreSQL/Artistic licence</a>. The software is available in source and binary format from the <a href=\"https://www.postgresql.org/ftp/pgadmin/\">PostgreSQL mirror network</a>. Because compiling from source requires technical knowledge, we recommend installing binary packages whenever possible.") . '</p>

<p>' . _("The pages in this section give additional details about each binary package available as well as more direct download links. In addition, you can download source tarballs and pgAgent for your servers to enable additional functionality.") . '</p>

<p>' . _("Finally, pgAdmin is included by default in many Linux distributions, such as RedHat, Fedora, Debian and Ubuntu. Please check your package manager for details.") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

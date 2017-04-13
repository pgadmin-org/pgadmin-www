<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin 4: Download - Source code");
$PAGE_CONTENT = '

<h1>' . _("Source code") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Dave Page") . '</h4>

<p>' . _("Source tarballs are available for users wishing to compile their own copy of pgAdmin 4, or those using platforms for which we do not supply prebuilt packages.") . '</p>

<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin4/v1.4/source/", "1.4") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin4/v1.3/source/", "1.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin4/v1.2/source/", "1.2") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin4/v1.1/source/", "1.1") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin4/v1.0/source/", "1.0") . '<br />&nbsp;</li>
</ul>

<p>' . _("Build instructions are included in the tarballs, and are available online:") . '</p>

<ul>
  <li>' . sprintf(_("<a href=\"%s\">v%s instructions</a>"), "https://git.postgresql.org/gitweb/?p=pgadmin4.git;a=blob_plain;f=README;hb=0c435154aca919ee6ff37cd12fc4fb1c9e663be2", "1.4") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">v%s instructions</a>"), "https://git.postgresql.org/gitweb/?p=pgadmin4.git;a=blob_plain;f=README;hb=1e5de7e66e7e578a7803087389d18102e0f5d945", "1.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">v%s instructions</a>"), "https://git.postgresql.org/gitweb/?p=pgadmin4.git;a=blob_plain;f=README;hb=2dc0eab057d797a1fecb9947239be5638b442c5d", "1.2") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">v%s instructions</a>"), "https://git.postgresql.org/gitweb/?p=pgadmin4.git;a=blob_plain;f=README;hb=6c45eea1a04dc911a9a5bc3f2d6de04caadba6b6", "1.1") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">v%s instructions</a>"), "https://git.postgresql.org/gitweb/?p=pgadmin4.git;a=blob_plain;f=README;hb=30397476da45e419a409710e7447bf0f10fcbcd9", "1.0") . '<br />&nbsp;</li>
</ul>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin 4: Download - macOS");
$PAGE_CONTENT = '

<h1>' . _("macOS") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Dave Page") . '</h4>

<p>' . _("A macOS App Bundle containing the pgAdmin 4 Desktop Runtime and Web application is available for macOS 10.10 and above:") . '</p>
<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin3/pgadmin4/v1.0/macos/", "1.0") . '<br />&nbsp;</li>
</ul>

<p>' . _("These packages are macOS appbundles. To install, mount the disk image using the finder, and drag the pgAdmin 4 appbundle to the desired location.") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin 4: Download - Mac OS X");
$PAGE_CONTENT = '

<h1>' . _("Mac OS X") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Dave Page") . '</h4>

<p><b>' . _("WARNING: This is BETA software that should not be used for production purposes.") . '</b></p>

<p>' . _("A Mac OS X App Bundle containing the pgAdmin 4 Desktop Runtime and Web application is available for Mac OS X 10.10 and above:") . '</p>
<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin3/pgadmin4/v1.0-beta2/osx/", "1.0-beta2") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin 4 v%s</a>"), "https://www.postgresql.org/ftp/pgadmin3/pgadmin4/v1.0-beta1/osx/", "1.0-beta1") . '<br />&nbsp;</li>
</ul>

<p>' . _("These packages are Mac OS X appbundles. To install, mount the disk image using the finder, and drag the pgAdmin 4 appbundle to the desired location.") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Download - macOS");
$PAGE_CONTENT = '

<h1>' . _("macOS") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Dave Page") . '</h4>

<p><b>' . _("WARNING:") . '</b> ' . _("pgAdmin III is no longer supported. It is recommended that you download <a href=\"macos4.php\">pgAdmin 4</a> instead.") . '</p>

<p>' . _("macOS packages built on Panther are available up to pgAdmin v1.4.1. Later versions up to 1.16.x are being built on Tiger as Universal binaries for Intel and PPC. 1.18.x supports Snow Leopard (10.6) and above, on Intel only, and 1.20.x and above is built on Yosemite and supports Mavericks (10.9) and above.") . '</p>
<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin3/v1.22.2/osx/", "1.22.2") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin3/v1.22.1/osx/", "1.22.1") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin3/v1.22.0/osx/", "1.22.0") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin3/v1.20.0/osx/", "1.20.0") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin3/v1.18.1/osx/", "1.18.1") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin3/v1.16.1/osx/", "1.16.1") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin3/v1.14.3/osx/", "1.14.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin3/v1.12.3/osx/", "1.12.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin3/v1.10.5/osx/", "1.10.5") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin3/v1.8.4/osx/", "1.8.4") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin3/v1.6.3/osx/", "1.6.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin3/v1.4.3/osx/", "1.4.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "https://www.postgresql.org/ftp/pgadmin/pgadmin3/v1.2.2/osx/", "1.2.2") . '<br />&nbsp;</li>
</ul>

<p>' . _("These packages are macOS appbundles. To install the 1.8 or later series, mount the disk image using the finder, and drag the pgAdmin appbundle to the desired location. To install the 1.6 series, unpack the archive, and run the installer package. For earlier versions, unpack the archive, and move the appbundle into the desired location.") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

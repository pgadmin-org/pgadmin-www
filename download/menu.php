<?php

function www_menu()
{
  $output = '
<div' . www_current_menu_page("index.php") . '><a href="index.php">&rsaquo; ' . _("Introduction") . '</a></div>
<div' . www_current_menu_page("adminpacks.php") . '><a href="adminpacks.php">&rsaquo; ' . _("Admin packs") . '</a></div>
<div' . www_current_menu_page("debian.php") . '><a href="debian.php">&rsaquo; ' . _("Debian") . '</a></div>
<div' . www_current_menu_page("freebsd.php") . '><a href="freebsd.php">&rsaquo; ' . _("FreeBSD") . '</a></div>
<div' . www_current_menu_page("languages.php") . '><a href="languages.php">&rsaquo; ' . _("Languages") . '</a></div>
<div' . www_current_menu_page("macosx.php") . '><a href="macosx.php">&rsaquo; ' . _("Mac OSX") . '</a></div>
<div' . www_current_menu_page("rpm.php") . '><a href="rpm.php">&rsaquo; ' . _("RPM") . '</a></div>
<div' . www_current_menu_page("slackware.php") . '><a href="slackware.php">&rsaquo; ' . _("Slackware") . '</a></div>
<div' . www_current_menu_page("snapshots.php") . '><a href="snapshots.php">&rsaquo; ' . _("Snapshots") . '</a></div>
<div' . www_current_menu_page("source.php") . '><a href="source.php">&rsaquo; ' . _("Source code") . '</a></div>
<div' . www_current_menu_page("windows.php") . '><a href="windows.php">&rsaquo; ' . _("Windows &trade;") . '</a></div>
';

  return $output;
}

?>
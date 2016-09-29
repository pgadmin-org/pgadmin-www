<?php

function www_menu()
{
  $output = '
<div' . www_current_menu_page("index.php") . '><a href="index.php">&rsaquo; ' . _("Introduction") . '</a></div>
<br />
<div' . www_current_menu_page("xxx") . '>&nbsp;' . _("pgAdmin 4:") . '</div>
<div' . www_current_menu_page("linux4.php") . '><a href="linux4.php">&rsaquo; ' . _("Linux") . '</a></div>
<div' . www_current_menu_page("macos4.php") . '><a href="macos4.php">&rsaquo; ' . _("macOS") . '</a></div>
<div' . www_current_menu_page("pip4.php") . '><a href="pip4.php">&rsaquo; ' . _("Python Wheel (PIP)") . '</a></div>
<div' . www_current_menu_page("source4.php") . '><a href="source4.php">&rsaquo; ' . _("Source code") . '</a></div>
<div' . www_current_menu_page("windows4.php") . '><a href="windows4.php">&rsaquo; ' . _("Windows&trade;") . '</a></div>
<br />
<div' . www_current_menu_page("xxx") . '>&nbsp;' . _("pgAdmin 3:") . '</div>
<div' . www_current_menu_page("macos.php") . '><a href="macos.php">&rsaquo; ' . _("macOS") . '</a></div>
<div' . www_current_menu_page("source.php") . '><a href="source.php">&rsaquo; ' . _("Source code") . '</a></div>
<div' . www_current_menu_page("windows.php") . '><a href="windows.php">&rsaquo; ' . _("Windows&trade;") . '</a></div>
<br />
<div' . www_current_menu_page("xxx") . '>&nbsp;' . _("Extras:") . '</div>
<div' . www_current_menu_page("pgagent.php") . '><a href="pgagent.php">&rsaquo; ' . _("pgAgent") . '</a></div>
';

  return $output;
}

?>

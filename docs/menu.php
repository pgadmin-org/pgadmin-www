<?php

function www_menu()
{
  $output = '
<div' . www_current_menu_page("index.php") . '><a href="index.php">&rsaquo; ' . _("Introduction") . '</a></div>
<br />
<div' . www_current_menu_page("xxx") . '>&nbsp;' . _("pgAdmin 4:") . '</div>
<div' . www_current_menu_page("../docs4/dev/index.html") . '><a href="../docs4/dev/index.html">&rsaquo; ' . _("Dev") . '</a></div>
<div' . www_current_menu_page("../docs4/1.x/index.html") . '><a href="../docs4/1.x/index.html">&rsaquo; ' . sprintf(_("Release %s"), "1.x") . '</a></div>
<br />
<div' . www_current_menu_page("xxx") . '>&nbsp;' . _("pgAdmin 3:") . '</div>
<div' . www_current_menu_page("dev/index.html") . '><a href="dev/index.html">&rsaquo; ' . _("Dev") . '</a></div>
<div' . www_current_menu_page("1.22/index.html") . '><a href="1.22/index.html">&rsaquo; ' . sprintf(_("Release %s"), "1.22") . '</a></div>
<div' . www_current_menu_page("1.20/index.html") . '><a href="1.20/index.html">&rsaquo; ' . sprintf(_("Release %s"), "1.20") . '</a></div>
<div' . www_current_menu_page("1.18/index.html") . '><a href="1.18/index.html">&rsaquo; ' . sprintf(_("Release %s"), "1.18") . '</a></div>
<div' . www_current_menu_page("1.16/index.html") . '><a href="1.16/index.html">&rsaquo; ' . sprintf(_("Release %s"), "1.16") . '</a></div>
<div' . www_current_menu_page("1.14/index.html") . '><a href="1.14/index.html">&rsaquo; ' . sprintf(_("Release %s"), "1.14") . '</a></div>
<div' . www_current_menu_page("1.12/index.html") . '><a href="1.12/index.html">&rsaquo; ' . sprintf(_("Release %s"), "1.12") . '</a></div>
<div' . www_current_menu_page("1.10/index.html") . '><a href="1.10/index.html">&rsaquo; ' . sprintf(_("Release %s"), "1.10") . '</a></div>
<div' . www_current_menu_page("1.8/index.html") . '><a href="1.8/index.html">&rsaquo; ' . sprintf(_("Release %s"), "1.8") . '</a></div>
<div' . www_current_menu_page("1.6/index.html") . '><a href="1.6/index.html">&rsaquo; ' . sprintf(_("Release %s"), "1.6") . '</a></div>
<div' . www_current_menu_page("1.4/index.html") . '><a href="1.4/index.html">&rsaquo; ' . sprintf(_("Release %s"), "1.4") . '</a></div>
';

  return $output;
}

?>

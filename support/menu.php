<?php

function www_menu()
{
  $output = '
<div' . www_current_menu_page("index.php") . '><a href="index.php">&rsaquo; ' . _("Introduction") . '</a></div>
<div' . www_current_menu_page("list.php") . '><a href="list.php">&rsaquo; ' . _("Mailing list") . '</a></div>
<div' . www_current_menu_page("issues.php") . '><a href="issues.php">&rsaquo; ' . _("Known issues") . '</a></div>
';

  return $output;
}

?>

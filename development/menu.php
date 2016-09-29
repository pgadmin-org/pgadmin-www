<?php

function www_menu()
{
  $output = '
<div' . www_current_menu_page("index.php") . '><a href="index.php">&rsaquo; ' . _("Introduction") . '</a></div>
<div' . www_current_menu_page("git.php") . '><a href="git.php">&rsaquo; ' . _("GIT access") . '</a></div>
<div' . www_current_menu_page("list.php") . '><a href="list.php">&rsaquo; ' . _("Mailing list") . '</a></div>
<div' . www_current_menu_page("team.php") . '><a href="team.php">&rsaquo; ' . _("Team") . '</a></div>
<div' . www_current_menu_page("changelog.php") . '><a href="changelog.php">&rsaquo; ' . _("Change log") . '</a></div>
<div' . www_current_menu_page("todo.php") . '><a href="todo.php">&rsaquo; ' . _("TODO list") . '</a></div>
';

  return $output;
}

?>

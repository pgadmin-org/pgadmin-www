<?php

function www_menu()
{
  $output = '
<div' . www_current_menu_page("index.php") . '><a href="index.php">&rsaquo; ' . _("Introduction") . '</a></div>
<div' . www_current_menu_page("faq.php") . '><a href="faq.php">&rsaquo; ' . _("FAQ") . '</a></div>
<div' . www_current_menu_page("features.php") . '><a href="features.php">&rsaquo; ' . _("Features") . '</a></div>
<div' . www_current_menu_page("contribute.php") . '><a href="contribute.php">&rsaquo; ' . _("Contribute") . '</a></div>
<div' . www_current_menu_page("licence.php") . '><a href="licence.php">&rsaquo; ' . _("Licence") . '</a></div>
<div' . www_current_menu_page("privacypolicy.php") . '><a href="privacypolicy.php">&rsaquo; ' . _("Privacy policy") . '</a></div>
';

  return $output;
}

?>

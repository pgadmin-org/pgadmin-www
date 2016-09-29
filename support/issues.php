<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Support - Known issues");
$PAGE_CONTENT = '

<h1>' . _("Known issues") . '</h1>

<p>' . _("Bugs and other issues in pgAdmin are usually fixed within a very short time once they have been reported to us. There are some issues that may be out of our control, or may take significant effort to resolve - possibly more effort than the issue warrants, in which case they may not be resolved.") . '</p>

<p>' . _("You can view the <a href=\"https://redmine.postgresql.org/projects/pgadmin4/issues\">issue list</a> on the pgAdmin 4 <a href=\"https://redmine.postgresql.org/projects/pgadmin4\">Redmine project</a>.")
 . '</p>'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

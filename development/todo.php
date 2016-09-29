<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Development - TODO list");
$PAGE_CONTENT = '

<h1>' . _("TODO list") . '</h1>

<p>' . _("The TODO list is a list of features that are planned or have been requested for inclusion in a future version of pgAdmin. As pgAdmin is a volunteer project, there is no guarantee that any feature will be implemented in any particular release, but where we expect or aim to do so, the feature will be tagged with a target version.") . '</p>

<p>' . _("You can view the <a href=\"https://redmine.postgresql.org/projects/pgadmin4/issues?query_id=19\">TODO list</a> on the pgAdmin 4 <a href=\"https://redmine.postgresql.org/projects/pgadmin4\">Redmine project</a>.") . '</p>'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

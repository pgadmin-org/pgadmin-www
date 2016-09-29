<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Development - Change log");
$PAGE_CONTENT = '

<h1>' . _("Change log") . '</h1>

<p>' . _("The change log is a record of the notable changes made to pgAdmin by the various developers. It is a manually maintained list, and as such may not include details of every minor change that has ever been made. If you need that level of detail, please check the commit messages in the <a href=\"git.php\">GIT repository</a>.") . '</p>

<p>' . _("You can view the <a href=\"https://redmine.postgresql.org/projects/pgadmin4/roadmap?utf8=%E2%9C%93&tracker_ids%5B%5D=1&tracker_ids%5B%5D=2&completed=1\">change log</a> on the pgAdmin 4 <a href=\"https://redmine.postgresql.org/projects/pgadmin4\">Redmine project</a>.") . '</p>'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

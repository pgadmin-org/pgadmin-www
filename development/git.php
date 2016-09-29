<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Development - GIT access");
$PAGE_CONTENT = '

<h1>' . _("GIT access") . '</h1>

<p>' . _("pgAdmin is available subject to the terms of the <a href=\"../licence.php\">licence</a>. pgAdmin is developed using a number of GIT repositories to hold the source code. Access to the repository is available through a <a href=\"https://git.postgresql.org/gitweb/?p=pgadmin4.git\">web interface</a> or using your favourite GIT client.") . '</p>

<p>' . _("To checkout the source from the command line and get started, you might use commands such as shown below on a Linux or Unix system. For further details, please see the <a href=\"../download/source.php\">source code</a> build instructions.") . '</p>

<div class="pgaCode">
git clone git://git.postgresql.org/git/pgadmin4.git<br />
cd pgadmin4<br />
more README<br />
</div>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

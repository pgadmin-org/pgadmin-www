<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Development - Introduction");
$PAGE_CONTENT = '

<h1>' . _("Introduction") . '</h1>

<p>' . _("pgAdmin is a community project, relying on contributions from developers around the world for bug fixes and new features. Anyone is welcome to join the project and contribute as much or as little as they like. pgAdmin is written in <a href=\"https://www.python.org/\">Python</a> and <a href=\"https://jquery.com/\">jQuery</a> with <a href=\"http://getbootstrap.com/\">Bootstrap</a>, using the <a href=\"http://flask.pocoo.org/\">Flask</a> framework, so at the least you will want to be familiar with Python and basic web development to hack the code. The more experienced pgAdmin developers will also be able to lend a guiding hand to new developers, so don't be afraid to get stuck in!") . '</p>

<p>' . _("The pages in this section of the website should provide you with all the information you need to get started as a new developer, including <a href=\"git.php\">GIT access</a>, the developers <a href=\"list.php\">mailing list</a>, the  <a href=\"team.php\">Development Team</a> structure, the <a href=\"todo.php\">TODO list</a> and the <a href=\"changelog.php\">change log</a>.") . '</p>

<p>' . _("If you are not a programmer, you can still get involved in the project if you wish - as a <a href=\"../docs4/dev/translations.html\">translator</a>, or helping the developers with testing or documentation.") . '</p>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

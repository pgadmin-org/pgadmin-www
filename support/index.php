<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Support - Introduction");
$PAGE_CONTENT = '

<h1>' . _("Introduction") . '</h1>

<p>' . _("pgAdmin is a community project comprising of a number of volunteers from around the world. We do not provide 'paid for' support for pgAdmin, although we do aim to fix bugs and help out wherever possible. Obviously we cannot guarantee to fix every problem or help every user though we always try to.") . '</p>

<p>' . _("If you have a problem that you need help with, please make sure you check the <a href=\"../docs/\">pgAdmin documentation</a> for a solution first. If you cannot find the answer you need there, then please try searching on Google. Make sure you include any relevant error messages in your query. If you still cannot find the answer you need, then please post a message to the <a href=\"list.php\">pgadmin-support</a> mailing list.") . '</p>

<p>' . _("If you believe you have found a bug in pgAdmin 4, please log it on the <a href=\"https://redmine.postgresql.org/projects/pgadmin4/issues/new\">tracker</a>. General questions and discussion should remain on the mailing list and will be deleted if logged in the bug tracker.") . '</p>

<p><b>' . _("Note:") . '</b> ' . _("pgAdmin III is no longer being developed, and no further bugs will be fixed. Please do not log pgAdmin III issues on the pgAdmin 4 bug tracker.") . '</p>

<p>' . _("Please <b>do not</b> send an email directly to one of the programmers; they might miss it, or even be the wrong person at all. Using the mailing list helps ensure that your request won't get lost and will be answered in a timely fashion. Dave Page's <a href=\"http://pgsnake.blogspot.co.uk/2005/04/support-rant-dave-goes-off-on-one.html\">blog</a> includes a frank posting describing why this is a bad idea, whilst Eric Raymond's paper <a href=\"http://www.catb.org/~esr/faqs/smart-questions.html\">'How to ask questions the smart way'</a> describes the best way to get the help you need.") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

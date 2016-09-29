<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Development - Mailing list");
$PAGE_CONTENT = '

<h1>' . _("Mailing list") . '</h1>

<p>' . _("The pgadmin-hackers mailing list is intended for developers who wish to contribute to pgAdmin project. You are more than welcome to subscribe, but please remember to use <a href=\"../support/list.php\">pgadmin-support</a> list for end user support issues. To subscribe to the mailing list, send an email to <a href=\"mailto:pgadmin-hackers-request@postgresql.org\">pgadmin-hackers-request@postgresql.org</a> with the word 'subscribe', without quotes, as the body of message. To unsubscribe, send the word 'unsubscribe'.") . '</p>

<p>' . _("Messages sent to the list are publicly and permanently archived at the <a href=\"http://archives.postgresql.org/pgadmin-hackers/\">PostgreSQL Archives</a>.") . '</p>'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

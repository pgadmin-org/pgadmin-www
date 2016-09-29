<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Support - Mailing list");
$PAGE_CONTENT = '

<h1>' . _("Mailing list") . '</h1>

<p>' . _("The pgadmin-support mailing list is intended for end user support and bug reports. To subscribe to the mailing list, send an email to <a href=\"mailto:pgadmin-support-request@postgresql.org\">pgadmin-support-request@postgresql.org</a> with the word 'subscribe', without quotes, as the body of message. To unsubscribe, send the word 'unsubscribe'.") . '</p>

<p>' . _("If you are posting a bug report, please include the following information where possible:") . '</p>
<ul>
  <li>' . _("The version of pgAdmin you are running. If it is a development snapshot, please include the build date from the Help -&gt; About screen, and GIT repository version if known.") . '<br />&nbsp;</li>
  <li>' . _("The configure options used (if compiled from source)") . '<br />&nbsp;</li>
  <li>' . _("The operating system and version details - e.g. Windows 10, or macOS 10.11.5") . '<br />&nbsp;</li>
  <li>' . _("Whether you're running in server or desktop mode") . '<br />&nbsp;</li>
  <li>' . _("The Qt version and configure options used (if compiled from source)") . '<br />&nbsp;</li>
  <li>' . _("The Python version and configure options used (if running in server mode)") . '<br />&nbsp;</li>
  <li>' . _("The output from <code>pip freeze</code> (if running in server mode)") . '<br />&nbsp;</li>
  <li>' . _("Steps required to reproduce the problem. Please include a simple schema with optional data if required. This may be sent privately <b>upon request from a developer</b> if you are concerned about posting sample code or data to a public mailing list.") . '<br />&nbsp;</li>
</ul>

<p>' . _("Messages sent to the list are archived publicly and permanently at the <a href=\"http://archives.postgresql.org/pgadmin-support/\">PostgreSQL Archives</a>.") . '</p>

<p>' . _("Please <b>do not</b> send an email directly to one of the developers; they might miss it, or even be the wrong person at all. Using the mailing list helps ensure that your request isn't lost and will be answered in a timely fashion.") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>

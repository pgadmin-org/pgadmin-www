<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: FAQ");
$PAGE_CONTENT = '

<h1>' . _("Frequently Asked Questions") . '</h1>

<ol>
  <li><a href="#1">' . _('What is pgAdmin 4?') . '</a></li>
  <li><a href="#2">' . _('What are Server Mode and Desktop Mode?') . '</a></li>
  <li><a href="#3">' . _('What should I set the Binary Path configuration option to so I can make and restore backups?') . '</a></li>
  <li><a href="#4">' . _('Why doesn\'t pgAdmin use the native File management dialogues?') . '</a></li>
</ol>

<h2 id="1">' . _('What is pgAdmin 4?') . '</h2>

<p>' . _('pgAdmin is a management tool for <a href="https://www.postgresql.org/">PostgreSQL</a> and derivative relational databases such as <a href="http://www.enterprisedb.com">EnterpriseDB\'s</a> EDB Advanced Server. It may be run either as a web or desktop application. For more information on the features offered, please see the <a href="features.php">Features</a> and <a href="screenshots/">screenshots</a>.') . '</p>

<h2 id="2">' . _('What are Server Mode and Desktop Mode?') . '</h2>

<p>' . _('When deploying pgAdmin on a web server for multiple users, it is run in server mode (SERVER_MODE=True). This mode requires each user to have an account in pgAdmin, with their own password. Users are required to login to pgAdmin in order to use it. One or more users may be configured as an administrator, and will be able to add or remove other users. For more information, please see the <a href="docs4/dev/server_deployment.html">Server Deployment</a> and <a href="docs4/dev/pgadmin_user.html">User Management</a> documentation.') . '</p>

<p>' . _('To allow running in desktop mode (SERVER_MODE=False), a runtime application is provided to host and display the pgAdmin code (sometimes referred to as the application server). In this mode, each user runs their own instance of pgAdmin, thus no authentication or user management is required. For more information, please see the <a href="docs4/dev/desktop_deployment.html">Desktop Deployment</a> documentation.') . '</p>

<h2 id="3">' . _('What should I set the Binary Path configuration option to so I can make and restore backups?') . '</h2>

<p>' . _('pgAdmin can utilise PostgreSQL utilities such as <i>pg_dump</i>, <i>pg_restore</i> to enable users to take backups and restore them, as well as run other maintenance operations. The directory path in which these utilities can be found must be provided to pgAdmin to enable these features - see <i>File -&gt; Preferences -&gt; Paths -&gt; Binary paths</i>. You can specify separate paths for the PostgreSQL and EDB Advanced Server binaries. In server mode, the binaries must be installed on the server hosting pgAdmin, whilst in desktop mode they must be on the local machine (that is running pgAdmin).') . '</p>

<p>' . _('The binary utilities are typically shipped with the database server packages for your platform. Future versions of pgAdmin may include them in some desktop packages.') . '</p>

<h2 id="4">' . _('Why doesn\'t pgAdmin use the native File management dialogues?') . '</h2>

<p>' . _('This is largely for a couple of reasons:') . '/<p>

<ul>
  <li>' . _('As pgAdmin is a web application, it can only interact with the local filesystem in ways that are allowed by modern web browsers. This limits what is possible for security; essentially files can only be "downloaded" or "uploaded" (through a form). There is no way to simply save an update to a file by hitting a Save button, nor is it possible to save the working directory.') . '</li>
  <li>' . _('When running in server mode, files are read from and stored on the server to enable users to work with the same data whatever machine they happen to be using. There are no "native dialogues" for working with files stored on a web server in this way, so we have to implement our own.') . '</li>
</ul>

<p>' . _('We have done extensive evaluation and testing of various ways of managing files in pgAdmin 4, and have consistently found that using our own dialogues provides the best experience (one that we continue to refine and improve with user feedback).') . '</p>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?> 

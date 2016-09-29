www.pgadmin.org
===============

This is the code for the pgAdmin website, www.pgadmin.org. In order to setup
an instance of the site, you will need a dedicated virtual host with the
site installed in the docroot. The following virtual host configuration is
taken from paxsor.postgresql.org which is (at the time of writing) serving
the primary site under lighttpd:

$HTTP["host"] =~ "^(www\.pgadmin\.org|pgadmin\.org)" {
	server.errorlog = "/var/log/lighttpd/www_error.log"
	accesslog.filename = "/var/log/lighttpd/www_access.log"

	server.document-root = "/usr/local/www.pgadmin.org"

	$HTTP["scheme"] != "https" {
		url.redirect = (".*" => "https://www.pgadmin.org$0")
	}

	fastcgi.server = (".php" =>
		("php-main" =>
			("socket" => "/tmp/www-fastcgi.sock",
			"bin-path" => "/usr/bin/php-cgi"
			)
		)
	)

	# Doc rewrites
	url.rewrite-once = (
                # New Sphinx docs
                "^/docs/(dev|1.16|1.18|1.20|1.22)/(.*).(jpg|png|gif|css|html|js|ttf|txt|woff)$" => "/gitrepo/pgadmin3-$1/docs/en_US/_build/html/$2.$3",
                "^/docs/(dev|1.16|1.18|1.20|1.22)/(.*).(jpg|png|gif|css|html|js|ttf|txt|woff)(\?.*)$" => "/gitrepo/pgadmin3-$1/docs/en_US/_build/html/$2.$3$4",

                # pgAdmin 4 docs
                "^/docs4/(dev|1.x)/(.*).(jpg|png|gif|css|html|js|ttf|txt|woff)$" => "/gitrepo/pgadmin4-$1/docs/en_US/_build/html/$2.$3",
                "^/docs4/(dev|1.x)/(.*).(jpg|png|gif|css|html|js|ttf|txt|woff)(\?.*)$" => "/gitrepo/pgadmin4-$1/docs/en_US/_build/html/$2.$3$4",

                # Old-style HTML docs
                "^/docs/(1.4|1.6|1.8|1.10|1.12|1.14)/(.*).(jpg|png|gif)$" => "/gitrepo/pgadmin3-$1/docs/en_US/$2.$3",
                "^/docs/(1.4|1.6|1.8|1.10|1.12|1.14)/(.*)$" => "/include/doc.php?docset=$1&docpage=$2"
	)
}

Note that PHP's safe mode is currently turned off to allow the framework to 
tweak $LANG. This needs some work!

Static content
--------------

Each static page in the site is a very simple PHP script including the page 
generator scripti (include/page.php), setting up a couple of variables with 
the content and page title and then calling the www_page() function which 
renders the page. Strings in each page are wrapped in _( ) markers to allow 
them be translated.

Section menus
-------------

A section menu is built from the 'menu.php' script present in the same 
directory as the source content. Section menus are not present in the list
archives or docs sections of the site. The menu script contains a single 
function (www_menu()) which outputs a set of div's forming the section menu.
Each line includes a call to www_current_menu_page($1) which will include
the appropriate CSS class/id, depending on whether or not $1 is the current
page.

Additional content
------------------

There are also three additional directories that are not included with the 
site source code that must be setup under the document root. These hold 
copies of the pgAdmin source tree(s) for integration of the documentation,
translation status, changelog and bug lists etc, the snapshot builds and
the mailing list archives.

/gitrepo
--------

/gitrepo
   /pgadmin3
   /pgadmin3-1.4
...
...

The gitrepo directory holds the source trees for trunk and any stable branches
whose docs are integrated into the site. These trees are
git pull'ed hourly. Files under here are integrated into the website in a
variety of ways - basic text/html files may be included as raw content in
other PHP pages and the translation statuses are read using the code in
include/po_status.php. The documentation is accessed by it's 'real' filename,
relocated to /docs/xxx/, where xxx is 'dev' or the branch version number. A 
rewrite rule in the lighty config intercepts these URLs, extracts the document set 
and page requested, and passes them to include/doc.php which constructs the 
page content and passes it to the standard page rendered.

Modern versions of the docs are served directly using the rewrite rules in the
lighty config.

Synchronisation
---------------

In order to keep the live website up to date, a number of cron jobs are 
scheduled.

# Update the website itself
22 * * * *      root cd /usr/local/www.pgadmin.org && git pull --rebase > /dev/null 2>&1

# Update the documentation from it's git repositories
02 * * * *	root cd /usr/local/www.pgadmin.org/gitrepo/pgadmin3.git && (git fetch origin && for v in dev 1.22 1.20 1.18 1.16 1.14 1.12 1.10 1.8 1.6 1.4 ; do cd ../pgadmin3-$v && git pull --rebase ; done ) > /dev/null 
2>&1

# Rebuild the Sphinx docs
11 * * * *	root cd /usr/local/www.pgadmin.org/gitrepo && (for v in dev 1.22 1.20 1.18 1.16 ; do cd pgadmin3-$v && sh bootstrap && cd docs/en_US && PATH=$PATH:/usr/local/bin make -f Makefile.sphinx html && cd ../../..
/ ; done ) > /dev/null 2>&1

# pgAdmin 4 Stuff

# Update the documentation from it's git repositories
29 * * * *      root cd /usr/local/www.pgadmin.org/gitrepo/pgadmin4.git && (git fetch origin && for v in dev 1.x ; do cd ../pgadmin4-$v && git pull --rebase ; done ) > /dev/null 2>&1

# Rebuild the Sphinx docs
34 * * * *      root cd /usr/local/www.pgadmin.org/gitrepo && (for v in dev 1.x ; do cd pgadmin4-$v/docs/en_US && PATH=$PATH:/usr/local/bin make -f Makefile.sphinx html && cd ../../../ ; done ) > /dev/null 2>&1


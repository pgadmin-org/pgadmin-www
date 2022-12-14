#######################################################################
#
# pgAdmin III - PostgreSQL Tools
# Copyright (C) 2002 - 2008, The pgAdmin Development Team
# This software is released under the BSD Licence
#
# stringmerge - merge pgadmin3.pot template file into existing pgadmin3.po
# translated files, compile and publish them on CVS.
#
# Same as 'Update from .pot' feature of poEdit.
#
#######################################################################

cd ..
git pull
cd locale
if test -f pgadmin3_website.pot; then

  for GETTEXTDIR in *_*/LC_MESSAGES/ ; do
    echo "Entering $GETTEXTDIR."
    cd $GETTEXTDIR
    echo "Merging pgadmin3_website.pot into pgadmin3_website.po"
    msgmerge --update pgadmin3_website.po ../../pgadmin3_website.pot
    echo "Compiling pgadmin3.mo"
    LANG=C msgfmt -o pgadmin3_website.mo pgadmin3_website.po
    git add pgadmin3_website.mo pgadmin3_website.po
    cd ../..
  done
  echo "Committing changes to GIT."
  git commit -m "Automatic stringmerge using merge script." *_*/*
fi

# Current path
return_path=`pwd`

echo "Welcome to the Bucket installer. You will be asked for some details to
complete install during the process.\n- - - -"

## Set Install Path
echo "Install Path:"
read install_path
if [ ! -d "$install_path" ]
then
	echo "Creating $install_path"
	mkdir $install_path
fi
echo "Moving into $install_path"
cd $install_path

## Get Bucket
echo "Cloning Bucket into $install_path"
hash git >/dev/null && /usr/bin/env git clone https://github.com/fuzzyfox/Bucket.git ./ || {
	echo "git not installed... attempting alternative method"
	hash wget >/dev/null && /usr/bin/env wget https://github.com/fuzzyfox/Bucket/tarball/master -O - | tar xvfz - || {
		echo "unable to install, see manual install instructions"
		cd $return_path
		exit
	}
}
if [ -d "bucket" ]
then
	mv -r bucket/* ./
	rmdir bucket
fi


## sort out .htaccess file
if [ -f .htaccess ][ -h .htaccess ]
then
	echo "Found existing .htaccess file backing up to pre-bucket.htaccess"
	mv .htaccess pre-bucket.htaccess
fi
echo "setting up bucket .htaccess file"
mv sample.htaccess .htaccess

## sort out bucket config
echo "chmoding config dir"
chmod 777 application/config
echo "creating config files"
mv asset/install/config/* application/config/
chmod 777 application/config/config.php
chmod 777 application/config/database.php
chmod 777 application/config/sandcastle.php

echo "Time for some config information for the database\n\n"
echo "Hostname:"
read db_hostname
echo "Username:"
read db_username
echo "Password:"
read -s db_password
echo "Database:"
read db_database

## start php install script now prep work is done
echo "making changes to config files"
php asset/install/install.php hostname=$db_hostname username=$db_username password=$db_password database=$db_database

##setup database
echo "setting up database schema"
mysql -u $db_username --password=$db_password -h $db_hostname $db_database <asset/install/install.sql

echo "install complete"
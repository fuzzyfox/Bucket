# Bucket
This is Bucket, this is a community portal built on top of [SandCastle](http://www.github.com/fuzzyfox/SandCastle).

## Install
This isn't the easiest process in the world, will work on this soon.

### Requirements
* PHP 5.3+
* MySQL 5.1+
* Apache 2+

### Installation
This installation is for installing Bucket inside the root of your site. For anything else you should be able to work it out from this.

First you need to get the code. We recommend you do this using git so that you can quickly and easily get future updates

	git clone https://github.com/fuzzyfox/Bucket.git ./

Next… time to move some files around.

	mv application/config/config.sample.php application/config/config.php
	mv application/config/database.sample.php application/config/database.php

Finally you need to go into each of the config files and fill in the needed details. These should be fairly obvious, however here are the ones we recommend you change.

* `config.php`
	* encryptionkey
* `database.php`
	* hostname
	* username
	* password
	* database (bucket is the easiest option)
* `sandcastle.php`
	* secretsalt

Once all that is done, point your browser to `www.yourbucketinstall.com`.

### Database
You will need to setup the database with the needed schema and default login. We will leave you to choose which method you use for this. The SQL to setup the schema and initial login can be found in `db_schema.sql`

### Admin Login
Finally... finish setting up Bucket by logging into the admin interface `/admin` using the following credentials (which we recommend you remove ASAP).

	Email:		j.doe@example.com
	Password:	password
	
**Note** you should probably create an account for yourself first before removing Mr John Doe :P

### URLs
To get the most out of Bucket you should use the sample `.htaccess` file provided. Implimentation is easy just do the following while in the Bucket directory.
	
	mv sample.htaccess .htaccess
	
Should you choose not to use our `.htaccess` then at a minimum you should paste the following into your own at the end of the file to ensure that Bucket works.
	
	<IfModule mod_rewrite.c>
		RewriteCond $1 !^(index\.php|index\.html|asset|robots\.txt|humans\.txt|user_guide|docs)
		RewriteCond %{REQUEST_FILENAME} !-f
		RewriteCond %{REQUEST_FILENAME} !-d
		RewriteRule ^(.*)$ /index.php?$1
	</IfModule>

## License
### CodeIgniter
For more information on the CodeIgniter License read it over at [codeigniter.com/user_guide/license.html](http://codeigniter.com/user_guide/license.html)

### SandCastle
This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0. If a copy of the MPL was not distributed with this file, You can obtain one at [mozilla.org/MPL/2.0](http://mozilla.org/MPL/2.0/).
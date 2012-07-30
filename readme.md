# Bucket
This is Bucket, this is a community portal built on top of [SandCastle](http://www.github.com/fuzzyfox/SandCastle).

## Install
Installation is two-phased. First you need to grab a copy of bucket, and put it into the root dir for your site.
	
	git clone git://github.com/fuzzyfox/Bucket.git ./
	
Next you will need to navigate to `/install` via your web browser. (e.g. http://www.yourbucketinstall.com/install/) and follow the instructions there.

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
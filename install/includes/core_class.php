<?php

class Core {

	// Function to validate the post data
	function validate_post($data)
	{
		// Counter variable
		$counter = 0;

		// Validate the hostname
		if(isset($data['hostname']) AND !empty($data['hostname'])) {
			$counter++;
		}
		// Validate the username
		if(isset($data['username']) AND !empty($data['username'])) {
			$counter++;
		}
		// Validate the password
		if(isset($data['password']) AND !empty($data['password'])) {
		  // pass
		}
		// Validate the database
		if(isset($data['database']) AND !empty($data['database'])) {
			$counter++;
		}
		// Validate the encryption key
		if(isset($data['encryptionkey']) AND !empty($data['encryptionkey'])) {
			$counter++;
		}
		// Validate the secret salt
		if(isset($data['secretsalt']) AND !empty($data['secretsalt'])) {
			$counter++;
		}

		// Check if all the required fields have been entered
		if($counter == '5') {
			return true;
		}
		else {
			return false;
		}
	}

	// Function to show an error
	function show_message($type,$message) {
		return $message;
	}

	// Function to write the config file
	function write_config($data) {
		
		/*
		 Database
		*/
		
		// Config path
		$template_path 	= 'config/database.php';
		$output_path 	= '../application/config/database.php';

		// Open the file
		$database_file = file_get_contents($template_path);

		$new  = str_replace("%HOSTNAME%",$data['hostname'],$database_file);
		$new  = str_replace("%USERNAME%",$data['username'],$new);
		$new  = str_replace("%PASSWORD%",$data['password'],$new);
		$new  = str_replace("%DATABASE%",$data['database'],$new);

		// Write the new database.php file
		$handle = fopen($output_path,'w+');

		// Chmod the file, in case the user forgot
		@chmod($output_path,0777);

		// Verify file permissions
		if(is_writable($output_path)) {

			// Write the file
			if(fwrite($handle,$new)) {
				return true;
			} else {
				return false;
			}

		} else {
			return false;
		}
		
		/*
		 Config
		*/
		
		// Config path
		$template_path 	= 'config/config.php';
		$output_path 	= '../application/config/config.php';

		// Open the file
		$config_file = file_get_contents($template_path);

		$new  = str_replace("%BASEURL%",$data['baseurl'],$config_file);
		$new  = str_replace("%INDEXPAGE%",$data['indexpage'],$new);
		$new  = str_replace("%ENCRYPTIONKEY%",$data['encryptionkey'],$new);
		$new  = str_replace("%LANGUAGE%",$data['language'],$new);

		// Write the new database.php file
		$handle = fopen($output_path,'w+');

		// Chmod the file, in case the user forgot
		@chmod($output_path,0777);

		// Verify file permissions
		if(is_writable($output_path)) {

			// Write the file
			if(fwrite($handle,$new)) {
				return true;
			} else {
				return false;
			}

		} else {
			return false;
		}
		
		/*
		 SandCastle
		*/
		
		// Config path
		$template_path 	= 'config/sandcastle.php';
		$output_path 	= '../application/config/sandcastle.php';

		// Open the file
		$sandcastle_file = file_get_contents($template_path);

		$new  = str_replace("%SECRETSALT%",$data['secretsalt'],$sandcastle_file);

		// Write the new database.php file
		$handle = fopen($output_path,'w+');

		// Chmod the file, in case the user forgot
		@chmod($output_path,0777);

		// Verify file permissions
		if(is_writable($output_path)) {

			// Write the file
			if(fwrite($handle,$new)) {
				return true;
			} else {
				return false;
			}

		} else {
			return false;
		}
	}
}
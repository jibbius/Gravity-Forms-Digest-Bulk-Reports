<?php

/* Allow user to specify their own paths */
	if(file_exists('local-config.php'))
		include 'local-config.php';

/* Default paths */
	if (!defined('TEST_ENV') )define( 'TEST_ENV', '.' );

	require  TEST_ENV.'/includes/bootstrap.php';
	$_SERVER['HTTP_USER_AGENT'] = '';
	$_SERVER['SERVER_NAME'] = '127.0.0.1';
	define( 'GF_DIGEST_DOING_TESTS', true );
	require dirname( __FILE__ ) . '/../gravityforms-digest/gravityforms-digest.php';

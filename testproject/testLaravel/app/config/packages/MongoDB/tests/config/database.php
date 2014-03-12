<?php

return array(

	'fetch' => PDO::FETCH_CLASS,
	'default' => 'mongodb',

	'connections' => array(
		'mongodb' => array(
			'name'	   => 'mongodb',
			'driver'   => 'mongodb',
			'host'     => 'localhost',
			'database' => 'demodb',
		),

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'unittest',
			'username'  => 'travis',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
	)

);

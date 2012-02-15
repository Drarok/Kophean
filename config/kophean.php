<?php

return array(
	'default' => array(
		// Server to connect to.
		'server' => '127.0.0.1',

		// Port number to connect to.
		'port' => Pheanstalk::DEFAULT_PORT,

		// Connect timeout in seconds.
		'timeout' => NULL,

		// Publish jobs to this tube.
		'use-tube' => Pheanstalk::DEFAULT_TUBE,

		// Watch these tubes when calling reserve().
		'watch-tubes' => array(
			Pheanstalk::DEFAULT_TUBE,
		),

		// Ignore these tubes.
		'ignore-tubes' => array(
			// 'slowTube',
		),
	),
);

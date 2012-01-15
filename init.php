<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Pheanstalk compatibility with Kohana's autoload implementation.
 */

if ($path = Kohana::find_file('vendor', 'pheanstalk/pheanstalk_init')) {
	require_once $path;
}
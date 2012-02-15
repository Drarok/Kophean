<?php
/**
 * Compatibility wrapper for Pheanstalk.
 */

abstract class KOPhean {
	/**
	 * Instantiate and configure a Pheanstalk instance.
	 */
	public static function factory($config = 'default') {
		$config = Kohana::$config->load('kophean.' . $config);
		$instance = new Pheanstalk(Arr::get($config, 'server'));

		if ((bool) $use = Arr::get($config, 'use-tube')) {
			$instance->useTube($use);
		}

		if ((bool) $watch = Arr::get($config, 'watch-tubes')) {
			foreach ($watch as $tube) {
				$instance->watch($tube);
			}
		}

		if ((bool) $ignore = Arr::get($config, 'ignore-tubes')) {
			foreach ($ignore as $tube) {
				$instance->ignore($tube);
			}
		}

		return $instance;
	}
}

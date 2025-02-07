<?php
/**
 * Plugin Name: Optimization Detective Dev Mode
 * Plugin URI: https://github.com/westonruter/od-dev-mode
 * Description: Adds filters to facilitate development of the Optimization Detective plugin.
 * Requires at least: 6.5
 * Requires PHP: 7.2
 * Requires Plugins: optimization-detective
 * Version: 0.1.1
 * Author: Weston Ruter
 * Author URI: https://weston.ruter.net/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain: od-dev-mode
 * Update URI: https://github.com/westonruter/od-dev-mode
 * GitHub Plugin URI: https://github.com/westonruter/od-dev-mode
 *
 * @package OptimizationDetective\DevMode
 */

namespace OptimizationDetective\DevMode;

// During development, setting the storage lock TTL to zero is useful to set to zero so you can quickly collect new URL
// Metrics by reloading the page without having to wait for the storage lock to release.
add_filter(
	'od_url_metric_storage_lock_ttl',
	static function () {
		return 0;
	}
);

// During development, this can be useful to set to zero so that you don't have to wait for new URL Metrics to be requested when engineering a new optimization.
add_filter(
	'od_url_metric_freshness_ttl',
	static function () {
		return 0;
	}
);

// During development, it may be helpful to reduce the sample size to 1 so that you don't have to keep reloading the page
// to collect new URL Metrics to flush out stale ones during active development.
add_filter(
	'od_url_metrics_breakpoint_sample_size',
	static function () {
		return 1;
	}
);

// During development when you have the DevTools console open on the bottom, for example, the viewport aspect ratio will be larger than normal.
add_filter(
	'od_maximum_viewport_aspect_ratio',
	static function (): int {
		return PHP_INT_MAX;
	}
);

// During development when you have the DevTools console open on the right, the viewport aspect ratio will be smaller than normal.
add_filter(
	'od_minimum_viewport_aspect_ratio',
	static function (): int {
		return 0;
	}
);

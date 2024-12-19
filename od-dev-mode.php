<?php
/**
 * Plugin Name: Optimization Detective Dev Mode
 */

add_filter( 'od_url_metric_storage_lock_ttl', '__return_zero' );
add_filter( 'od_url_metric_freshness_ttl', '__return_zero' );
add_filter( 'od_url_metrics_breakpoint_sample_size', function () { return 3; } );
add_filter( 'od_can_optimize_response', '__return_true' );
add_filter( 'od_maximum_viewport_aspect_ratio', function () { return PHP_INT_MAX; } );
add_filter( 'od_minimum_viewport_aspect_ratio', function () { return 0; } );

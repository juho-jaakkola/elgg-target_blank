<?php
/**
 * TargetBlank
 *
 * @package TargetBlank
 */
 
/**
 * Initialize the plugin.
 */
function target_blank_init() {
	elgg_extend_view('js/elgg', 'target_blank/js');
}

elgg_register_event_handler('init', 'system', 'target_blank_init');
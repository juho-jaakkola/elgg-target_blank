// <script>

elgg.provide('elgg.target_blank');

elgg.target_blank.init = function() {
	$('a').each(function() {
		if (this.href.indexOf(elgg.config.wwwroot) == -1) {
			$(this).attr('target', '_blank');
		}
	});
};

elgg.register_hook_handler('init', 'system', elgg.target_blank.init);
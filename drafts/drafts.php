<?php
return array(
	'title' => array(
		'text'   => 'Your drafts',
		'compressed'   => false,
	),
	'html' => function() {
		$excluded = c::get('plugin.drafts.widget.exclude', 'error');
		return tpl::load(__DIR__ . DS . 'template.php', array(
			'drafts' => panel()->site()->index()->invisible()->not($excluded)
		));
	}
);

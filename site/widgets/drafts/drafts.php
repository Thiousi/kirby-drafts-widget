<?php
return array(
	'title' => 'Drafts',
	'html' => function() {
		return tpl::load(__DIR__ . DS . 'template.php', array(
			'drafts' => panel()->site()->index()->invisible()->not('error')
		));
	}
);
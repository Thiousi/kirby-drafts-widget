<?php

include_once __DIR__ . DS . '..' . DS . 'helpers.php'; 

if (showDraftsWidget()) {
  return array(
    'title' => array(
      'text'   => c::get('plugin.drafts.widget.title', 'Your drafts'),
      'compressed'   => false,
    ),
    'html' => function() {
      return tpl::load(__DIR__ . DS . 'template.php');
    }
  );
}

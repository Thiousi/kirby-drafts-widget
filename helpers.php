<?php

function drafts() {
  $excluded = c::get('plugin.drafts.widget.exclude', 'error');
  $drafts = panel()->site()->index()->invisible()->not($excluded);
  return $drafts;
}

function hasDrafts() {
  return drafts()->count() !== 0;
}

function showDraftsWidget() {
  $hide_if_empty = c::get('plugin.drafts.widget.hide.empty', true);
  return !$hide_if_empty || hasDrafts();
}

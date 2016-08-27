<div class="dashboard-box">
  <?php if($drafts->count() == 0): ?>
    <div class="text"><?php echo c::get('plugin.drafts.widget.nodrafts', 'You don\'t have any drafts... Start writing today!');?></div>
  <?php else: ?>
    <ul class="dashboard-items">
      <?php foreach($drafts as $item): ?>
        <li class="dashboard-item">
            <a title="<?php __($item->title()) ?>" href="<?php __($item->url('edit')) ?>">
              <figure>
                <span class="dashboard-item-icon dashboard-item-icon-with-border"><?php echo $item->icon('') ?></span>
                <figcaption class="dashboard-item-text"><?php __($item->title()) ?></figcaption>
              </figure>
            </a>
        </li>
      <?php endforeach ?>
    </ul>
  <?php endif ?>
</div>

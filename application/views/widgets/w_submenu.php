<? if ($submenu): ?>
<ul class="nav nav-pills nav-stacked">
<? foreach ($submenu as $sub): ?>
    <li><?= HTML::anchor($sub['full_url'], $sub['title_menu'] ? $sub['title_menu'] : $sub['title']) ?></li>
<? endforeach; ?>
</ul>
<? else: ?>
<?= null ?>
<? endif; ?>

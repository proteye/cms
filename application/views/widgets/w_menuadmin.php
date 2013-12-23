<div class="navbar navbar-static-top navbar-inverse">
    <nav class="navbar-inner">
        <a <?= ($_SERVER['REQUEST_URI'] != '/') ? 'href="/" class="brand"' : 'class="brand cur_default"' ?>><?= $site_name ?></a>
        <ul class="nav">
            <li class="divider-vertical"></li>
            <? foreach ($menu as $name => $menu): ?>
            <? if (in_array($select, $menu)): ?>
            <li class="active"><?= HTML::anchor('admin/'. $menu[0], $name) ?></li>
            <? else: ?>
            <li><?= HTML::anchor('admin/'. $menu[0], $name) ?></li>
            <? endif; ?>
            <? endforeach; ?>
        </ul>
        <?= $menu_login ?>
    </nav>
</div>

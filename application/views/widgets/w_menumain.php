<div class="navbar navbar-static-top">
    <nav class="navbar-inner">
        <a <?= ($_SERVER['REQUEST_URI'] != '/') ? 'href="/" class="brand"' : 'class="brand cur_default"' ?>><?= $site_name ?></a>
        <ul class="nav">
            <li class="divider-vertical"></li>
            <?= HTML::top_menu($top_menu, $select) ?>
        </ul>
        <?= $menu_login ?>
    </nav>
</div>
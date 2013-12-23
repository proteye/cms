<? if(!$auth->logged_in('login')): ?>
<ul class="nav pull-right">
    <li class="divider-vertical"></li>
    <li><a href="<?= URL::site('login') ?>" class="warning">Вход</a></li>
    <li><a href="<?= URL::site('register') ?>">Регистрация</a></li>
</ul>
<? else: ?>
<ul class="nav pull-right">
    <li class="divider-vertical"></li>
    <li <?= ($user->id == 1) ? 'class="text-warning"' : null ?>><small>Здравствуйте,<br/><a><?= $user->first_name ?></a></small></li>
    <li><a href="<?= URL::site('logout') ?>" class="error">Выход</a></li>
</ul>
<? endif; ?>
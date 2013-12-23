<? if ($errors): ?>
<? foreach ($errors as $error): ?>
    <div class="text-error"><?= $error ?></div>
<? endforeach; ?>
    <br/>
<? endif; ?>

<?=Form::open('login', array('class' => 'form-horizontal'))?>
<div class="control-group">
    <?=Form::label('username', 'Логин:', array('class' => 'control-label',))?>
    <div class="controls">
        <?=Form::input('username', NULL, array('type' => 'text', 'id' => 'username'))?>
    </div>
</div>
<div class="control-group">
    <?=Form::label('password', 'Пароль:', array('class' => 'control-label',))?>
    <div class="controls">
        <?=Form::input('password', NULL, array('type' => 'password', 'id' => 'password'))?>
    </div>
</div>
<div class="control-group">
    <div class="controls">
        <label class="checkbox">
            <input name="remember" type="checkbox" <?= $post['remember'] ? 'checked' : null ?>> Запомнить меня?
        </label><br/>
        <button name="submit" type="submit" class="btn btn-success">Войти</button>
        <a href="<?= URL::site('register') ?>" class="btn btn-info">Регистрация</a>
    </div>
</div>
<?=Form::close()?>
<? if($errors): ?>
<? foreach ($errors as $error): ?>
<? if (is_array($error)) {
 foreach ($error as $err): ?>
    <div class="text-error"><?=$err?></div>
<? endforeach;
}
else { ?>
    <div class="text-error"><?=$error?></div>
<? }
endforeach; ?>
<br/>
<? endif; ?>

<?= Form::open(NULL, array('class' => 'form-horizontal')) ?>
<div class="control-group">
    <?= Form::label('username', 'Логин:', array('class' => 'control-label',)) ?>
    <div class="controls">
        <?= Form::input('username', $user['username'], array('type' => 'text', 'id' => 'username')) ?>
    </div>
</div>
<div class="control-group">
    <?= Form::label('first_name', 'Имя:', array('class' => 'control-label',)) ?>
    <div class="controls">
        <?= Form::input('first_name', $user['first_name'], array('type' => 'text', 'id' => 'first_name')) ?>
    </div>
</div>
<div class="control-group">
    <?= Form::label('email', 'E-Mail:', array('class' => 'control-label',)) ?>
    <div class="controls">
        <?= Form::input('email', $user['email'], array('type' => 'text', 'id' => 'email')) ?>
    </div>
</div>
<div class="control-group">
    <?= Form::label('password', 'Пароль:', array('class' => 'control-label',)) ?>
    <div class="controls">
        <?= Form::input('password', NULL, array('type' => 'password', 'id' => 'password')) ?>
    </div>
</div>
<div class="control-group">
    <?= Form::label('password_confirm', 'Повторите пароль:', array('class' => 'control-label',)) ?>
    <div class="controls">
        <?= Form::input('password_confirm', NULL, array('type' => 'password', 'id' => 'password_confirm')) ?>
    </div>
</div>
<div class="control-group">
    <div class="controls">
        <button name="submit" type="submit" class="btn btn-success">Добавить</button>
        <a href="<?= URL::site('admin/users') ?>" class="btn btn-inverse">Отмена</a>
    </div>
</div>
<?= Form::close() ?>
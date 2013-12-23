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
    <?= Form::label('name', 'Имя:', array('class' => 'control-label',)) ?>
    <div class="controls">
        <?= Form::input('name', $gallery['name'], array('type' => 'text', 'id' => 'name')) ?>
    </div>
</div>
<div class="control-group">
    <?= Form::label('title', 'Заголовок:', array('class' => 'control-label',)) ?>
    <div class="controls">
        <?= Form::input('title', $gallery['title'], array('type' => 'text', 'id' => 'title')) ?>
    </div>
</div>
<div class="control-group">
    <div class="controls">
        <button name="submit" type="submit" class="btn btn-success">Изменить</button>
        <a href="<?= URL::site('admin/gallery') ?>" class="btn btn-inverse">Отмена</a>
    </div>
</div>
<?= Form::close() ?>
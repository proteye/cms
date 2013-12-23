<?php
function print_tree($map, $id_page = 0, $shift = 0)
{
    if(!empty($map))
    {
        foreach($map as $section): ?>
            <option value="<?= $section['id'] ?>" <? if($id_page == $section['id']) echo 'selected'; ?>>
            <? for($i = 0; $i < $shift; $i++)echo '&nbsp;';?>
            <?= $section['title'] ?></option>
            <? print_tree($section['children'], $id_page, $shift + 4); 
        endforeach;
    }
}
?>

<? if($errors): ?>
<? foreach ($errors as $error): ?>
<div class="text-error"><?= $error ?></div>
<? endforeach; ?>
<br/>
<? endif; ?>

<?=Form::open(NULL, array('class' => 'form-horizontal'))?>
<div class="control-group">
    <label class="control-label" for="category_id">Раздел сайта:</label>
    <div class="controls">
        <div class="input-prepend">
            <select name="category_id" class="input-xlarge">
                <option value="0">Без раздела</option>
                <? print_tree($map, $article['category_id']) ?>
            </select>
        </div>
    </div>
</div>
<div class="control-group">
    <?=Form::label('title', 'Заголовок:', array('class' => 'control-label',))?>
    <div class="controls">
        <?=Form::input('title', $article['title'], array('type' => 'text', 'id' => 'title'))?>
    </div>
</div>
<div class="control-group">
    <?=Form::label('content', 'Текст статьи:', array('class' => 'control-label',))?>
    <div class="controls">
        <?=Form::textarea('content', $article['content'], array('id' => 'content'))?>
    </div>
</div>
<div class="control-group">
    <div class="controls">
        <label class="checkbox">
            <input name="public_index" type="checkbox" <?= $article['public_index'] ? 'checked' : null ?>> Публиковать на Главной?
        </label><br/>
        <label class="checkbox">
            <?= Form::checkbox('status', $article['status'], TRUE) ?> Показать?
        </label><br/>
        <button name="submit" type="submit" class="btn btn-success">Добавить</button>
        <a href="<?= URL::site('admin/articles') ?>" class="btn btn-inverse">Отмена</a>
    </div>
</div>
<?=Form::close()?>
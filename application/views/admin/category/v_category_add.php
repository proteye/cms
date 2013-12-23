<?php
function print_tree($map, $id_page, $shift = 0)
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
    <label class="control-label" for="parent_id">Родительский раздел:</label>
    <div class="controls">
        <div class="input-prepend">
            <select name="parent_id" class="input-xlarge">
                <option value="0">Без раздела</option>
                <? print_tree($map, $category['parent_id']) ?>
            </select>
        </div>
    </div>
</div>
<div class="control-group">
    <?=Form::label('title', 'Заголовок:', array('class' => 'control-label',))?>
    <div class="controls">
        <?=Form::input('title', $category['title'], array('type' => 'text', 'id' => 'title'))?>
    </div>
</div>
<div class="control-group">
    <?=Form::label('url', 'Адрес страницы:', array('class' => 'control-label',))?>
    <div class="controls">
        <?=Form::input('url', $category['url'], array('type' => 'text', 'id' => 'url'))?>
    </div>
</div>
<div class="control-group">
    <?=Form::label('priority', 'Приоритет (сортировка):', array('class' => 'control-label',))?>
    <div class="controls">
        <?=Form::input('priority', $category['priority'], array('type' => 'text', 'id' => 'priority'))?>
    </div>
</div>
<div class="control-group">
    <?=Form::label('title_menu', 'Заголовок в меню:', array('class' => 'control-label',))?>
    <div class="controls">
        <?=Form::input('title_menu', $category['title_menu'], array('type' => 'text', 'id' => 'title_menu'))?>
    </div>
</div>
<div class="control-group">
    <?=Form::label('description', 'Description:', array('class' => 'control-label',))?>
    <div class="controls">
        <?=Form::input('description', $category['description'], array('type' => 'text', 'id' => 'description'))?>
    </div>
</div>
<div class="control-group">
    <?=Form::label('keywords', 'Keywords:', array('class' => 'control-label',))?>
    <div class="controls">
        <?=Form::input('keywords', $category['keywords'], array('type' => 'text', 'id' => 'keywords'))?>
    </div>
</div>
<div class="control-group">
    <?=Form::label('content', 'Текст (контент):', array('class' => 'control-label',))?>
    <div class="controls">
        <?=Form::textarea('content', $category['content'], array('id' => 'content'))?>
    </div>
</div>
<div class="control-group">
    <div class="controls">
        <label class="checkbox">
            <?= Form::checkbox('status', $category['status'], TRUE) ?> Показать?
        </label><br/>
        <button name="submit" type="submit" class="btn btn-success">Добавить</button>
        <a href="<?= URL::site('admin/categories') ?>" class="btn btn-inverse">Отмена</a>
    </div>
</div>
<?=Form::close()?>
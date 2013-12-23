<a href="<?= URL::site('admin/articles/add') ?>" class="btn btn-primary btn-large pull-left">Добавить</a>
<div class="pagination pagination-right"><?= $pagination ?></div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#id</th>
            <th>Заголовок</th>
            <th>Текст статьи</th>
            <th>Категория</th>
            <th>Дата</th>
            <th>На главной</th>
            <th>Включен</th>
            <th></th>
        </tr>
    </thead>
<? if ($articles): ?>
<? foreach ($articles as $article): ?>
<tr>
    <td><?= $article['id'] ?></td>
    <td><?= $article['title'] ?></td>
    <td><?= $article['content'] ?></td>
    <td><?= $article['category_title'] ?></td>
    <td><?= $article['create_date'] ?></td>
    <td><?= $article['public_index'] ? '<i class="icon-ok"></i>' : '<i class="icon-remove-circle"></i>' ?></td>
    <td><?= $article['status'] ? '<i class="icon-ok"></i>' : '<i class="icon-remove-circle"></i>' ?></td>
    <td>
        <?= HTML::anchor('admin/articles/edit/' . $article['id'], '<i class="icon-pencil"></i>') ?>
        <?= HTML::anchor('admin/articles/delete/' . $article['id'], '<i class="icon-remove"></i>', 
                array('onclick' => 'return confirm(\'Вы действительно хотите удалить статью?\') ? true : false;')) ?>
    </td>
</tr>
<? endforeach; ?>
<? endif; ?>
</table>
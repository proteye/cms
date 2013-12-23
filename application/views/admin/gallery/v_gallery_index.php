<ol>
    <? foreach ($gallery as $gal): ?>
    <li><?= HTML::anchor('admin/gallery/images/'. $gal->id, $gal->title) ?>
        <?= HTML::anchor('admin/gallery/edit/' . $gal->id, '<i class="icon-pencil"></i>') ?>
        <?= HTML::anchor('admin/gallery/delete/' . $gal->id, '<i class="icon-remove"></i>', 
                array('onclick' => 'return confirm(\'Вы действительно хотите удалить галерею?\') ? true : false;')) ?>
    </li>
    <? endforeach; ?>
</ol><br/>
<a href="<?= URL::site('admin/gallery/add') ?>" class="btn btn-primary">Добавить</a>
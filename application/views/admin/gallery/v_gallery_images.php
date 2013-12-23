<?  ?>
<a href="<?= URL::site('admin/gallery/upload/' . $gallery->id) ?>" class="btn btn-primary">Загрузить</a><br/><br/>
<? if(count($images) > 0):?>
    <ul id="gallery_sortable">
    <? foreach($images as $img):?>
        <li image_id="<?=$img->id?>">
            <img src="<?= URL::site($img_small_dir . $img->path) ?>">
            <form method="post">
                <input type="hidden" name="image_id" value="<?= $img->id ?>">
                <a href="<?= URL::site('admin/gallery/edit_image/' . $img->id) ?>" class="btn btn-success btn-mini">Редактировать</a>
                <input type="submit" name="delete" class="btn btn-danger btn-mini" value="Удалить" onclick = "return confirm('Вы действительно хотите удалить изображение?') ? true : false;">
            </form>
        </li>
    <? endforeach ?>
    </ul>
<? else: ?>
    <h2>В галерее нет изображений</h2>
<? endif; ?>
<div class="clearfix"></div>
<a href="<?= URL::site('admin/gallery') ?>" class="btn btn-inverse">Вернуться к списку</a>
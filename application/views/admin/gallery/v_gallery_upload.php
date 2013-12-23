Загрузка изображений в галерею: <a href="<?= URL::site('admin/gallery/images/' . $gallery->id) ?>"><?= $gallery->title ?></a>
<br/><br/>
<div id="drop-files" ondragover="return false">
    <p>Перетащите сюда изображения</p><br>
    <form id="frm">
        <input type="file" id="uploadbtn" multiple>
        <input type="hidden" name="gallery_id" value="<?= $gallery->id ?>">
    </form>
</div>
<!-- Область предпросмотра -->
<div id="uploaded-holder"> 
    <div id="dropped-files">
<!-- Кнопки загрузить и удалить, а также количество файлов -->
        <div id="upload-button">
            <span>0 files</span>
            <button type="button" class="upload btn btn-success">Загрузить</button>
            <button type="button" class="delet btn btn-danger">Удалить все</button>
<!-- Прогресс бар загрузки -->
            <div id="loading">
                <div id="loading-bar">
                    <div class="loading-color"></div>
                </div>
                <div id="loading-content"></div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<!-- Список загруженных файлов -->
<div id="file-name-holder">
    <ul id="uploaded-files">
        <h2>Загруженные файлы</h2>
    </ul>
</div>
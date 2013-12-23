//
// Функции анимации Ajax загрузки.
//
function onAjaxSuccess(data) // - функция завершения Ajax запроса
{
    stopLoadingAnimation();
}
 
function startLoadingAnimation() // - функция запуска анимации
{
    if (!$("img#aj_loadimg").is("#aj_loadimg")) {
        $("body").append('<img id="aj_loadimg" src="/public/img/ajax-loader.gif" />');
        $("body").append('<div id="aj_success" class="btn btn-success">сохранено</div>');
    }
    
    var imgObj = $("#aj_loadimg");
    imgObj.show();
    
    // вычислим в какие координаты нужно поместить изображение загрузки,
    // чтобы оно оказалось в серидине страницы:
    var centerY = ($(window).scrollTop() + $("body").height() - imgObj.height())/2;
    var centerX = ($(window).scrollLeft() + $(window).width() - imgObj.width())/2;

    // поменяем координаты изображения на нужные:
    imgObj.offset({top:centerY, left:centerX});
}
 
function stopLoadingAnimation() // - функция останавливающая анимацию
{
    var imgObj = $("#aj_loadimg");
    var divObj = $("#aj_success");
    
    imgObj.hide();
    divObj.fadeIn(500);
    
    var centerY = ($(window).scrollTop() + $("body").height() - divObj.height())/2;
    var centerX = ($(window).scrollLeft() + $(window).width() - divObj.width())/2 - 12;
    
    divObj.offset({top:centerY, left:centerX});
    
    setInterval(function(){ divObj.fadeOut(500); }, 1000);
}

//
// Document READY.
//
$(document).ready(function() {
//
// Сортировка категорий Ajax.
//
    // var check = false;
    $('.sorting').sortable({
        stop: function(event, ui) {
            var pages = [];
            
            ui.item.parent().find('> li:not(li ul)').each(function(){
                pages.push($(this).attr('page_id'));
            });
            
            $.post('/admin/categories/sort_save', { pages: pages }, onAjaxSuccess);
            startLoadingAnimation();
            /*
            if (!check) {
                $('div.span12').append('<a href="/admin/categories/sort_save" class="btn btn-warning">Сохранить</a>');
                check = true;
            }
            */
        }
    });
    $('.sortable').disableSelection();
    
//
// CKEditor replace.
//
    if ($('#content').length > 0) {
        CKEDITOR.replace('content', {
            filebrowserUploadUrl : '/ajax/ckupload'
        });
    }
});
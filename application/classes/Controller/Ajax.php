<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Общий базовый класс
 */
class Controller_Ajax extends Controller
{
    public function action_ckupload()
    {
        if (!Auth::instance()->get_user()) {
            die();
        }
        
        $settings = Kohana::$config->load('settings');
        $ckupload_dir = $settings->ckupload_dir;
        $callback = $_GET['CKEditorFuncNum'];
        $file_name = $_FILES['upload']['name'];

        $getMime = explode('.', $file_name);
        $mime = end($getMime);
        $types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');
        
        if (!in_array($mime, $types)) {
            $error = "Загружаемый файл не соответствует типу";
            $http_path = '';
        }
        else {
            $file_name = substr_replace(sha1(microtime(true)), '', 12) . '.' . $mime;
            $file_name_tmp = $_FILES['upload']['tmp_name'];
            $full_path = $ckupload_dir . $file_name;

            if (copy($file_name_tmp, $full_path)) {
                $http_path = "/".$full_path;
                $error = "";
            }
            else {
                $error = "Произошла ошибка, попробуйте еще раз";
                $http_path = '';
            }
        }
        echo "<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction(".$callback.",\"".$http_path."\", \"".$error."\" );</script>";
    }
    
    public function action_image()
    {
        $image = ORM::factory('Image');
        
        if($image_id = $image->upload_base64($_POST['name'], $_POST['value'])) {
            $image = ORM::factory('Image', $image_id);
            $gallery = ORM::factory('Gallery', $_POST['gallery_id']);
            $gallery->add('images', $image);
            die($_POST['name'] . ':загружен успешно');
        }
        
        die($_POST['name'] . ':ошибка загрузки');	
    }
}
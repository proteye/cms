<?php defined('SYSPATH') or die('No direct script access.');

class Model_Image extends ORM
{
    protected $_table_name = 'images';
    
    protected $_has_many = array(
       'gallery' => array(
            'model' => 'Gallery',
            'foreign_key' => 'image_id',
            'through' => 'gallery_images',
            'far_key'      => 'gallery_id',
        ),
    );
    
    public function labels()
    {
        return array(
            'title' => 'Заголовок',
            'path' => 'Путь до изображения',
        );
    }
    
    public function rules()
    {
        return array(
            'path' => array(
                array('not_empty'),
            ),
        );
    }
    
    public function filters()
    {
        return array(
            TRUE => array(
                array('trim'),
            ),
            'title' => array(
                array('strip_tags'),
            ),
        );
    }
    
    public function upload_base64($name, $value)
    {
        define('IMG_DIR', 'public/uploads/gallery/');
        define('IMG_SMALL_DIR', 'public/uploads/gallery/thumbs/');
        define('IMG_SMALL_WIDTH', 200); 
        
        if(!$this->check_type($name))
            return false;

        $getMime = explode('.', $name);
        $mime = strtolower(end($getMime));
        $filename = mt_rand(0, 10000000) . '.' . $mime;

        while(file_exists(IMG_DIR . $filename))
            $filename = mt_rand(0, 10000000) . '.' . $mime;
        
        $images = ORM::factory('Image');
        $images->values(array('path' => $filename))->save();
        
        $this->move_upload_base64($value, $filename);
        return $images->id;
    }

    //
    // Редактирование изображения
    //
    /*
    public function edit($id_image, $fields)
    {
        $id_image = (int)$id_image;

        $where = "id_image = '$id_image'";
        $this->db->Update('images', $fields, $where);

        return true;
    }
*/
    private function check_type($name)
    {
        // Получаем расширение файла
        $getMime = explode('.', $name);
        $mime = strtolower(end($getMime));
        $types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');
        return in_array($mime, $types);
    }
/*
    public function delete($id_image)
    {
        $id_image = (int)$id_image;
        $one = $this->db->Select("SELECT * FROM images WHERE id_image='$id_image'");
        $this->db->Delete('images', "id_image='$id_image'");	
        $filename = $one[0]['path'];

        if(file_exists(IMG_DIR . $filename))
            unlink(IMG_DIR . $filename);

        if(file_exists(IMG_SMALL_DIR . $filename))
            unlink(IMG_SMALL_DIR . $filename);

        return true;
    }
*/
    private function move_upload_base64($file, $name) 
    { 
        // Выделим данные
        $data = explode(',', $file);

        // Декодируем данные, закодированные алгоритмом MIME base64
        $encodedData = str_replace(' ','+',$data[1]);
        $decodedData = base64_decode($encodedData);

        // Создаем изображение на сервере
        if(file_put_contents(IMG_DIR . $name, $decodedData)){
            $this->resize(IMG_DIR . $name, IMG_SMALL_DIR . $name, IMG_SMALL_WIDTH);
            return true;
        }

        return false;
    }

    //
    // Получить изображение по id
    //
    public function get_image($id_image)
    {
        $id_image = (int)$id_image;
        $res = $this->db->Select("SELECT * FROM images WHERE id_image = '$id_image'");
        return $res[0];
    }

    private function resize($src, $dest, $width, $height = null, $rgb = 0xFFFFFF, $quality = 100)
    {
        if (!file_exists($src)) return false;

        $size = getimagesize($src);

        if ($size === false) return false;

        // Определяем исходный формат по MIME-информации, предоставленной
        // функцией getimagesize, и выбираем соответствующую формату
        // imagecreatefrom-функцию.
        $format = strtolower(substr($size['mime'], strpos($size['mime'], '/')+1));
        $icfunc = "imagecreatefrom" . $format;
        if (!function_exists($icfunc)) return false;

        $x_ratio = $width / $size[0];

        if($height === null)
            $height = $size[1] * $x_ratio;

        $y_ratio = $height / $size[1];

        $ratio       = min($x_ratio, $y_ratio);
        $use_x_ratio = ($x_ratio == $ratio);

        $new_width   = $use_x_ratio  ? $width  : floor($size[0] * $ratio);
        $new_height  = !$use_x_ratio ? $height : floor($size[1] * $ratio);
        $new_left    = $use_x_ratio  ? 0 : floor(($width - $new_width) / 2);
        $new_top     = !$use_x_ratio ? 0 : floor(($height - $new_height) / 2);

        $isrc = $icfunc($src);
        $idest = imagecreatetruecolor($width, $height);

        imagefill($idest, 0, 0, $rgb);
        imagecopyresampled($idest, $isrc, $new_left, $new_top, 0, 0,
        $new_width, $new_height, $size[0], $size[1]);

        imagejpeg($idest, $dest, $quality);

        imagedestroy($isrc);
        imagedestroy($idest);

        return true;
    }
}
<?php


namespace app\models;

use fw\core\base\Model;

class Task extends Model
{

    public $attributes = [
        'name' => '',
        'email' => '',
        'task' => '',
        'image' => '',
    ];



    public $rules = [
        'required' => [
            ['name'],
            ['email'],
            ['task'],
        ],
        'email' => [
            ['email'],
        ],
    ];

    public function uploadImage($image)
    {
        if($image)
        {
            $filePath  = $image['tmp_name'];
            $filePath = getimagesize($filePath);
            $limitWidth  = 320;
            $limitHeight = 240;
            if ($filePath[1] > $limitHeight)          die('Высота изображения не должна превышать 240 точек.');
            if ($filePath[0] > $limitWidth)           die('Ширина изображения не должна превышать 320 точек.');
            $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
            $filename = uniqid(). ".".$extension;
            if (!move_uploaded_file($image['tmp_name'], PIC . '/' . $filename))  die('При записи изображения на диск произошла ошибка.');
            {
                return $filename;
            }


        }
    }







}
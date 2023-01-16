<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model
{

    public $image;

    public function rules(){
        return[
            [['image'], 'required'],
            [['image'],'file', 'extensions' => 'jpg,png']
        ];
    }


    public function uploadFile(UploadedFile $file)
    {
        $file->saveAs(Yii::getAlias('@web') . 'uploads/' . $file->name);
    }

//    public function deleteCurrentImage($currentImage)
//    {
//        if (file_exists(Yii::getAlias('@web') . 'uploads/'  . $currentImage) &&
//            is_file(Yii::getAlias('@web') . 'uploads/'  . $currentImage)) {
//            unlink(Yii::getAlias('@web') . 'uploads/'  . $currentImage);
//        }
//    }
}
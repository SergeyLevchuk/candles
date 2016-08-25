<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "candles".
 *
 * @property integer $idcandles
 * @property string $basic
 */
class Candles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     * @var UploadedFile
     */

    public $imageFile;

    public static function tableName()
    {
        return 'candles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'extensions' => 'png, jpg, jpeg'],
            [['text'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcandles' => 'Idcandles',
            'basic' => 'Basic',
        ];
    }

    public function uploadBasicImage()
    {
        $image = UploadedFile::getInstance($this, 'imageFile');
        if (empty($image)) {
            return false;
        }
        $this->basic = Yii::$app->security->generateRandomString() . '.' . $image->extension;
        return $image;
    }
}

<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "images".
 *
 * @property integer $idimages
 * @property string $nameImage
 * @property integer $candles_id
 *
 * @property Candles $candles
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nameImage'], 'file', 'extensions' => 'png, jpg, jpeg', 'maxFiles' => 10]

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idimages' => 'Idimages',
            'nameImage' => 'Name Image',
            'candles_id' => 'Candles ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCandles()
    {
        return $this->hasOne(Candles::className(), ['idcandles' => 'candles_id']);
    }


}

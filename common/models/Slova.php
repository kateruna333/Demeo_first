<?php
namespace common\models;

use Yii;

class Slova extends \yii\db\ActiveRecord
{

    public static function TableName()
    {
        return '{{slova}}';
    }

    public function rules()
    {
        return [
            [['ID_slova'], 'integer', 'max' => 11],
            [['ID_zad'], 'integer', 'max' => 11],
            [['slovo'],'string', 'max' => 70],
            [['chast_rechy'], 'integer', 'max' => 1],
            [['poryadok_in_sentense'], 'integer', 'max' => 1],
        ];
    }

    public function attributeLabels()
    {
        return [
            'ID_slova' => 'ID',
            'ID_zad' => 'ID_твору',
            'slovo' => 'слово з речення',
            'chast_rechy' => 'частина речення',
            'poryadok_in_sentense' => 'порядок у реченні',
        ];
    }
}
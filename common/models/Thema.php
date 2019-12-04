<?php
namespace common\models;

use Yii;

class Thema extends \yii\db\ActiveRecord
{

    public static function TableName()
    {
        return '{{thema}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer', 'max' => 30],
            [['Name'], 'string', 'max' => 70],
            [['Opys'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name' => 'Назва',
            'Opys' => 'Описание',
        ];
    }
}
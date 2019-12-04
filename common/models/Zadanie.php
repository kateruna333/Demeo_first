<?php
namespace common\models;

use Yii;

class Zadanie extends \yii\db\ActiveRecord
{

    public static function TableName()
    {
        return '{{zadanie}}';
    }

    public function rules()
    {
        return [
            [['ID_course'], 'integer', 'max' => 30],
            [['Name'], 'string', 'max' => 70],
            [['text', 'little_text'], 'string'],
            [['Active'], 'integer', 'max' => 11]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Название',
            'text' => 'Описание',
            'little_text' => 'Маленькое описание',
            'Active' => 'Активность',
        ];
    }
}
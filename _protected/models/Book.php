<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%book}}".
 *
 * @property int $id
 * @property string $name
 * @property string $kod
 * @property string|null $create_at
 * @property string|null $update_at
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%book}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'kod'], 'required'],
            [['name', 'kod', 'create_at', 'update_at'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'T/r',
            'name' => 'Kitob nomi',
            'kod' => 'Kod',
            'create_at' => 'Qo`shilgan sana',
            'update_at' => 'O`zgartirilgan sana',
        ];
    }

    public function beforeSave($insert)
    {
        if ($insert) {

            $this->create_at = date('Y-m-d H:i:s');
        } else {

            $this->update_at = date('Y-m-d H:i:s');
        }
        return parent::beforeSave($insert);
    }
    public function getOrd()
    {
        return $this->hasMany(Orderclient::className(), ['book_id' => 'id']);
    }
}

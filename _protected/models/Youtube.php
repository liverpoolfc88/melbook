<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%youtube}}".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $link
 * @property string|null $create_at
 * @property string|null $update_at
 */
class Youtube extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%youtube}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 25],
            [['link'], 'string', 'max' => 255],
            [['create_at', 'update_at'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Video nomi',
            'link' => 'Link',
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
}

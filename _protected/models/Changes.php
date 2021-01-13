<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%changes}}".
 *
 * @property int $id
 * @property string|null $words1
 * @property string|null $words2
 * @property string|null $photo
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Changes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%changes}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['words1', 'words2', 'photo', 'updated_at'], 'string', 'max' => 255],
            [['created_at'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'words1' => 'Birinchi matn',
            'words2' => 'Ikkinchi matn',
            'photo' => 'Rasm',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    
    public function beforeSave($insert)
    {
        if ($insert) {

            $this->created_at = date('Y-m-d H:i:s');
        } else {

            $this->updated_at = date('Y-m-d H:i:s');
        }
        return parent::beforeSave($insert);
    }
}

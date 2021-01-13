<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%language}}".
 *
 * @property int $id
 * @property string $name
 * @property string $kod
 * @property string|null $create_at
 * @property string|null $update_at
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%language}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'kod'], 'required'],
            [['name', 'kod'], 'string', 'max' => 25],
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
            'name' => 'Name',
            'kod' => 'Kod',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }
    
    public function beforeSave($insert){
        if($insert){

            $this->create_at = date('Y-m-d');
        }else{

            $this->update_at = date('Y-m-d');
        }
        return parent::beforeSave($insert);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%percent}}".
 *
 * @property int $id
 * @property int $percent
 */
class Percent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%percent}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['percent','summ'], 'required'],
            [['percent','summ'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'percent' => 'Percent',
            'summ' => 'summ',
        ];
    }
}

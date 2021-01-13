<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question_answer".
 *
 * @property int $id
 * @property string $question
 * @property string $answer
 * @property string|null $create_at
 * @property string|null $update_at
 */
class Questionanswer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question_answer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question', 'answer'], 'required'],
            [['question', 'answer'], 'string', 'max' => 255],
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
            'question' => 'Savollar',
            'answer' => 'Javoblar',
            'create_at' => 'Qo`shilgan sana',
            'update_at' => 'O`zgartirilgan san',
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

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%orderclient}}".
 *
 * @property int $id
 * @property int $client_id
 * @property int $book_id
 * @property string $create_at
 * @property string $update_at
 */
class Orderclient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%orderclient}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id', 'book_id'], 'required'],
            [['client_id', 'book_id'], 'integer'],
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
            'client_id' => 'Client ID',
            'book_id' => 'Book ID',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
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
    public function getClient()
        {
            return $this->hasOne(Client::className(), ['id' => 'client_id']);
        }
        public function getBook()
        {
            return $this->hasOne(Book::className(), ['id' => 'book_id']);
        }
}

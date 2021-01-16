<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%client}}".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $create_at
 * @property string|null $connect_at
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%client}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            [['user_id','count_contact'], 'integer'],
            [['name', 'phone'], 'string', 'max' => 255],
            [['create_at', 'connect_at'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nomi',
            'phone' => 'Telefoni',
            'user_id' => 'Bog`langan ishchi',
            'count_contact' => 'Murojaatlar soni',
            'create_at' => 'Murojaat vaqti',
            'connect_at' => 'Bog`lanilgan vaqti',
        ];
    }

    public function beforeSave($insert){
        if($insert) {
//            $date=date_create(date(),timezone_open("Asia/Tashkent"));
//            echo date_format($date,"Y-m-d H:i:s");

            $this->create_at = date('Y-m-d H:i:s');
        }
        return parent::beforeSave($insert);
    }

    public function getUser()
{
    return $this->hasOne(User::className(), ['id' => 'user_id']);
}
    public function getOrders()
    {
        return $this->hasMany(Orderclient::className(), ['client_id' => 'id']);
    }
}

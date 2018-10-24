<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "usertype".
 *
 * @property int $id
 * @property string $usertype_name
 * @property string $usertype_description
 */
class Usertype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usertype';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usertype_description'], 'required'],
            [['usertype_description'], 'string'],
            [['usertype_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'                    => 'ID',
            'usertype_name'         => 'User Type',
            'usertype_description'  => 'Description',
        ];
    }
}

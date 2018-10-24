<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "citizenship".
 *
 * @property int $id
 * @property string $citizenship_name
 */
class Citizenship extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'citizenship';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['citizenship_name'], 'required'],
            [['citizenship_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'citizenship_name' => 'Citizenship Name',
        ];
    }
}

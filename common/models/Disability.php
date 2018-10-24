<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "disability".
 *
 * @property int $id
 * @property string $disability_name
 */
class Disability extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'disability';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['disability_name'], 'required'],
            [['disability_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'disability_name' => 'Disability Name',
        ];
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "eligibility".
 *
 * @property int $id
 * @property string $eligibility_code
 * @property string $eligibility_name
 */
class Eligibility extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eligibility';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['eligibility_code', 'eligibility_name'], 'required'],
            [['eligibility_code'], 'string', 'max' => 100],
            [['eligibility_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'eligibility_code' => 'Eligibility Code',
            'eligibility_name' => 'Eligibility Name',
        ];
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "civil_status".
 *
 * @property int $id
 * @property string $civil_status_name
 */
class CivilStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'civil_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['civil_status_name'], 'required'],
            [['civil_status_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'civil_status_name' => 'Civil Status Name',
        ];
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employment_status".
 *
 * @property int $id
 * @property string $employment_status_name
 */
class EmploymentStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employment_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employment_status_name'], 'required'],
            [['employment_status_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'employment_status_name' => 'Employment Status Name',
        ];
    }
}

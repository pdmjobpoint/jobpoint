<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "educational_level".
 *
 * @property int $id
 * @property string $educational_level_name
 */
class EducationalLevel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'educational_level';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['educational_level_name'], 'required'],
            [['educational_level_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'educational_level_name' => 'Educational Level Name',
        ];
    }
}

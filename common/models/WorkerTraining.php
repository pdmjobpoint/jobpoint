<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "worker_training".
 *
 * @property int $id
 * @property int $worker_id
 * @property string $training_name
 * @property string $training_duration
 * @property string $training_institution
 * @property string $training_certificates
 * @property string $training_completion
 *
 * @property Worker $worker
 */
class WorkerTraining extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'worker_training';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['worker_id', 'training_name', 'training_duration', 'training_institution', 'training_certificates', 'training_completion'], 'required'],
            [['worker_id'], 'integer'],
            [['training_name', 'training_certificates'], 'string', 'max' => 255],
            [['training_duration', 'training_completion'], 'string', 'max' => 100],
            [['training_institution'], 'string', 'max' => 150],
            [['worker_id'], 'exist', 'skipOnError' => true, 'targetClass' => Worker::className(), 'targetAttribute' => ['worker_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'worker_id' => 'Worker ID',
            'training_name' => 'Training Name',
            'training_duration' => 'Training Duration',
            'training_institution' => 'Training Institution',
            'training_certificates' => 'Training Certificates',
            'training_completion' => 'Training Completion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorker()
    {
        return $this->hasOne(Worker::className(), ['id' => 'worker_id']);
    }
}

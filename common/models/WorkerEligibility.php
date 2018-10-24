<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "worker_eligibility".
 *
 * @property int $id
 * @property int $worker_id
 * @property int $eligibility_id
 * @property string $eligibility_licenseno
 * @property string $eligibility_expirydate
 *
 * @property Eligibility $eligibility
 * @property Worker $worker
 */
class WorkerEligibility extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'worker_eligibility';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['worker_id', 'eligibility_id'], 'required'],
            [['worker_id', 'eligibility_id'], 'integer'],
            [['eligibility_expirydate'], 'safe'],
            [['eligibility_licenseno'], 'string', 'max' => 100],
            [['eligibility_id'], 'exist', 'skipOnError' => true, 'targetClass' => Eligibility::className(), 'targetAttribute' => ['eligibility_id' => 'id']],
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
            'eligibility_id' => 'Eligibility ID',
            'eligibility_licenseno' => 'Eligibility Licenseno',
            'eligibility_expirydate' => 'Eligibility Expirydate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEligibility()
    {
        return $this->hasOne(Eligibility::className(), ['id' => 'eligibility_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorker()
    {
        return $this->hasOne(Worker::className(), ['id' => 'worker_id']);
    }
}

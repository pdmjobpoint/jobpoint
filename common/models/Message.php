<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property int $id
 * @property string $subject
 * @property string $message
 * @property string $sent_date
 * @property int $sent_by
 * @property int $sent_to
 * @property int $status
 * @property int $parent_id
 *
 * @property User $sentBy
 * @property User $sentTo
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject', 'message', 'sent_date', 'sent_by', 'sent_to'], 'required'],
            [['message'], 'string'],
            [['sent_date'], 'safe'],
            [['sent_by', 'sent_to', 'status', 'parent_id'], 'integer'],
            [['subject'], 'string', 'max' => 255],
            [['sent_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['sent_by' => 'id']],
            [['sent_to'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['sent_to' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subject' => 'Subject',
            'message' => 'Message',
            'sent_date' => 'Sent Date',
            'sent_by' => 'Sent By',
            'sent_to' => 'Sent To',
            'status' => 'Status',
            'parent_id' => 'Parent ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSentBy()
    {
        return $this->hasOne(User::className(), ['id' => 'sent_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSentTo()
    {
        return $this->hasOne(User::className(), ['id' => 'sent_to']);
    }
}

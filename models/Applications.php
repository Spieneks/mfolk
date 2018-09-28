<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "applications".
 *
 * @property int $application_number
 * @property int $application_status
 * @property string $start_date
 * @property int $sum_start
 * @property string $end_date
 * @property int $sum_end
 * @property int $sum_already
 * @property int $user_id
 *
 * @property PassportData $user
 */
class Applications extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'applications';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['application_number', 'start_date', 'sum_start', 'end_date', 'sum_end', 'sum_already', 'user_id'], 'required'],
            [['application_number', 'sum_start', 'sum_end', 'sum_already', 'user_id'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
            [['application_number'], 'unique'],
			[['application_status'], 'string', 'max' => 11],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => PassportData::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'application_number' => 'Application Number',
            'application_status' => 'Application Status',
            'start_date' => 'Start Date',
            'sum_start' => 'Sum Start',
            'end_date' => 'End Date',
            'sum_end' => 'Sum End',
            'sum_already' => 'Sum Already',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(PassportData::className(), ['user_id' => 'user_id']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "passport_data".
 *
 * @property int $user_id
 * @property string $fio
 * @property int $passport_number
 * @property string $date_issue
 * @property string $organizations
 * @property string $birthdate
 * @property string $birthplace
 * @property string $registration_address
 * @property string $residential_address
 * @property int $phone
 * @property string $mail
 *
 * @property Applications[] $applications
 */
class PassportData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'passport_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'fio', 'passport_number', 'date_issue', 'organizations', 'birthdate', 'birthplace', 'registration_address', 'residential_address', 'phone', 'mail'], 'required'],
            [['user_id', 'passport_number', 'phone'], 'integer'],
            [['date_issue', 'birthdate'], 'safe'],
            [['fio', 'organizations', 'birthplace'], 'string', 'max' => 40],
            [['registration_address', 'residential_address'], 'string', 'max' => 50],
            [['mail'], 'string', 'max' => 20],
            [['user_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'fio' => 'Fio',
            'passport_number' => 'Passport Number',
            'date_issue' => 'Date Issue',
            'organizations' => 'Organizations',
            'birthdate' => 'Birthdate',
            'birthplace' => 'Birthplace',
            'registration_address' => 'Registration Address',
            'residential_address' => 'Residential Address',
            'phone' => 'Phone',
            'mail' => 'Mail',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplications()
    {
        return $this->hasMany(Applications::className(), ['user_id' => 'user_id']);
    }
}

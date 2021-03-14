<?php

namespace frontend\modules\api\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $client_no
 * @property string $client_nick_name
 * @property string|null $company_name
 * @property string|null $notes
 * @property string|null $status
 * @property string $accept_booking
 * @property int|null $created_by
 * @property string $created_date_time
 * @property int|null $updated_by
 * @property string|null $updated_date_time
 */
class Client extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_nick_name', 'company_name'], 'required'],
            [['notes', 'status'], 'string'],
            [['created_by', 'updated_by'], 'integer'],
            [['created_date_time', 'updated_date_time'], 'safe'],
            [['client_nick_name'], 'string', 'max' => 20],
            [['company_name'], 'string', 'max' => 250],
            [['accept_booking'], 'string', 'max' => 5],
            [['client_nick_name','company_name'], 'unique'],
            
        ];
    }

    public function scenarios(){
        $scenarios = parent::scenarios();
        $scenarios['create'] =['basicInfo']; //scenarios values will be accepted
        return $scenarios;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'client_no' => 'Client No',
            'client_nick_name' => 'Client Nick Name',
            'company_name' => 'Company Name',
            'notes' => 'Notes',
            'status' => 'Status',
            'accept_booking' => 'Accept Booking',
            'created_by' => 'Created By',
            'created_date_time' => 'Created Date Time',
            'updated_by' => 'Updated By',
            'updated_date_time' => 'Updated Date Time',
        ];
    }
}

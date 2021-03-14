<?php

namespace frontend\modules\api\models;

use Yii;

/**
 * This is the model class for table "bookingbasicdetails".
 *
 * @property int $booking_id
 * @property int $movement_id
 * @property string|null $movement_contact_name
 * @property string|null $movement_contact_no
 * @property string|null $movement_description
 * @property string|null $movement_ref1
 * @property string|null $movement_ref2
 * @property string $movement_start_date_time
 * @property string $movement_pickup_date_time
 * @property int|null $movement_pax
 * @property string|null $movement_journey_type
 * @property string|null $movement_vehicle2stay
 * @property string|null $movement_arrival_date_time
 * @property string|null $movement_leave_date_time
 * @property string|null $movement_back_date_time
 * @property string $movement_finish_date_time
 * @property string|null $movement_route
 * @property string|null $movement_notes
 * @property string $movement_pickup_address
 * @property string $movement_pickup_postcode
 * @property string|null $movement_pickup_instruction
 * @property string $movement_drop_address
 * @property string $movement_drop_postcode
 * @property string|null $movement_drop_instruction
 * @property string|null $movement_status
 * @property int $booking_type_id
 * @property string $booking_type_description
 * @property string|null $booking_status
 * @property string|null $booking_invoice_status
 * @property string|null $booking_payment_status
 * @property int|null $booking_booked_by_id
 * @property string|null $booking_booked_by_name
 * @property int $client_no
 * @property string $client_nick_name
 */
class Bookingbasicdetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookingbasicdetails';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['booking_id', 'movement_start_date_time', 'movement_pickup_date_time', 'movement_finish_date_time', 'movement_pickup_address', 'movement_pickup_postcode', 'movement_drop_address', 'movement_drop_postcode', 'booking_type_id', 'booking_type_description', 'client_nick_name'], 'required'],
            [['booking_id', 'movement_id', 'movement_pax', 'booking_type_id', 'booking_booked_by_id', 'client_no'], 'integer'],
            [['movement_start_date_time', 'movement_pickup_date_time', 'movement_arrival_date_time', 'movement_leave_date_time', 'movement_back_date_time', 'movement_finish_date_time'], 'safe'],
            [['movement_route', 'movement_notes', 'movement_pickup_instruction', 'movement_drop_instruction', 'movement_status', 'booking_status', 'booking_invoice_status', 'booking_payment_status'], 'string'],
            [['movement_contact_name', 'movement_ref1', 'movement_ref2'], 'string', 'max' => 50],
            [['movement_contact_no'], 'string', 'max' => 15],
            [['movement_description', 'booking_type_description'], 'string', 'max' => 100],
            [['movement_journey_type', 'movement_pickup_postcode', 'movement_drop_postcode'], 'string', 'max' => 10],
            [['movement_vehicle2stay'], 'string', 'max' => 5],
            [['movement_pickup_address', 'movement_drop_address'], 'string', 'max' => 250],
            [['booking_booked_by_name'], 'string', 'max' => 255],
            [['client_nick_name'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'booking_id' => 'Booking ID',
            'movement_id' => 'Movement ID',
            'movement_contact_name' => 'Movement Contact Name',
            'movement_contact_no' => 'Movement Contact No',
            'movement_description' => 'Movement Description',
            'movement_ref1' => 'Movement Ref1',
            'movement_ref2' => 'Movement Ref2',
            'movement_start_date_time' => 'Movement Start Date Time',
            'movement_pickup_date_time' => 'Movement Pickup Date Time',
            'movement_pax' => 'Movement Pax',
            'movement_journey_type' => 'Movement Journey Type',
            'movement_vehicle2stay' => 'Movement Vehicle2stay',
            'movement_arrival_date_time' => 'Movement Arrival Date Time',
            'movement_leave_date_time' => 'Movement Leave Date Time',
            'movement_back_date_time' => 'Movement Back Date Time',
            'movement_finish_date_time' => 'Movement Finish Date Time',
            'movement_route' => 'Movement Route',
            'movement_notes' => 'Movement Notes',
            'movement_pickup_address' => 'Movement Pickup Address',
            'movement_pickup_postcode' => 'Movement Pickup Postcode',
            'movement_pickup_instruction' => 'Movement Pickup Instruction',
            'movement_drop_address' => 'Movement Drop Address',
            'movement_drop_postcode' => 'Movement Drop Postcode',
            'movement_drop_instruction' => 'Movement Drop Instruction',
            'movement_status' => 'Movement Status',
            'booking_type_id' => 'Booking Type ID',
            'booking_type_description' => 'Booking Type Description',
            'booking_status' => 'Booking Status',
            'booking_invoice_status' => 'Booking Invoice Status',
            'booking_payment_status' => 'Booking Payment Status',
            'booking_booked_by_id' => 'Booking Booked By ID',
            'booking_booked_by_name' => 'Booking Booked By Name',
            'client_no' => 'Client No',
            'client_nick_name' => 'Client Nick Name',
        ];
    }
}

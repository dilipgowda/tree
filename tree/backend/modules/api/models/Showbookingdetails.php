<?php

namespace frontend\modules\api\models;

use Yii;

/**
 * This is the model class for table "showbookingdetails".
 *
 * @property int $booking_id
 * @property string $client_nick_name
 * @property string|null $client_company_name
 * @property string $client_address
 * @property string $client_postcode
 * @property string $client_title
 * @property string $client_surname
 * @property string $client_firstname
 * @property string|null $client_department
 * @property string|null $client_telephone
 * @property string|null $client_mobile
 * @property string|null $client_email
 * @property float $client_credit_limit
 * @property string $client_payment_term
 * @property string $client_type_description
 * @property string $booking_start_date_time
 * @property float $booking_net_price
 * @property float $booking_vat
 * @property float $booking_total_price
 * @property string|null $booking_description
 * @property string|null $booking_ref1
 * @property string|null $booking_ref2
 * @property string $booking_status
 * @property string $booking_invoice_status
 * @property string $booking_payment_status
 * @property int $booking_booked_by
 * @property int $booking_created_by
 * @property string $booking_created_date_time
 * @property string|null $booking_extra_type_description
 * @property float|null $extra_qty
 * @property float|null $extra_unit_price
 * @property float|null $extra_net_price
 * @property float|null $extra_vat
 * @property float|null $extra_total
 * @property int $booking_movement_id
 * @property int|null $movement_pax
 * @property string $movement_pickup_date_time
 * @property string $movement_pickup_address
 * @property string $movement_pickup_postcode
 * @property string $movement_drop_address
 * @property string $movement_drop_postcode
 * @property string $movement_status
 * @property float $movement_net_price
 * @property float $movement_vat
 * @property float $movement_total
 * @property int $vehicle_size
 * @property float $vehicle_unit_price
 * @property float $vehicle_vat_amount
 * @property float $vehicle_total_price
 */
class Showbookingdetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'showbookingdetails';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['booking_id', 'booking_booked_by', 'booking_created_by', 'booking_movement_id', 'movement_pax', 'vehicle_size'], 'integer'],
            [['client_nick_name', 'client_address', 'client_postcode', 'client_title', 'client_surname', 'client_firstname', 'client_credit_limit', 'client_payment_term', 'client_type_description', 'booking_status', 'booking_invoice_status', 'booking_payment_status','booking_created_date_time', 'movement_pickup_date_time', 'movement_pickup_address', 'movement_pickup_postcode', 'movement_drop_address', 'movement_drop_postcode', 'movement_status', 'vehicle_size', 'vehicle_unit_price', 'vehicle_vat_amount', 'vehicle_total_price'], 'required'],
           
            [['booking_start_date_time', 'booking_created_date_time', 'movement_pickup_date_time'], 'safe'],
            [['client_nick_name'], 'string', 'max' => 20],
            [['client_company_name', 'client_address', 'movement_pickup_address', 'movement_drop_address'], 'string', 'max' => 250],
            [['client_postcode', 'client_title', 'movement_pickup_postcode', 'movement_drop_postcode'], 'string', 'max' => 10],
            [['client_surname', 'client_firstname', 'client_department', 'client_payment_term', 'client_type_description','movement_ref1','movement_ref2'], 'string', 'max' => 50],
            [['client_telephone', 'client_mobile'], 'string', 'max' => 15],
            [['client_email','movement_description'], 'string', 'max' => 100],
            [['booking_extra_type_description'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'booking_id' => 'Booking ID',
            'client_nick_name' => 'Client Nick Name',
            'client_company_name' => 'Client Company Name',
            'client_address' => 'Client Address',
            'client_postcode' => 'Client Postcode',
            'client_title' => 'Client Title',
            'client_surname' => 'Client Surname',
            'client_firstname' => 'Client Firstname',
            'client_department' => 'Client Department',
            'client_telephone' => 'Client Telephone',
            'client_mobile' => 'Client Mobile',
            'client_email' => 'Client Email',
            'client_credit_limit' => 'Client Credit Limit',
            'client_payment_term' => 'Client Payment Term',
            'client_type_description' => 'Client Type Description',
            'booking_start_date_time' => 'Booking Start Date Time',
            'booking_net_price' => 'Booking Net Price',
            'booking_vat' => 'Booking Vat',
            'booking_total_price' => 'Booking Total Price',
            'booking_status' => 'Booking Status',
            'booking_invoice_status' => 'Booking Invoice Status',
            'booking_payment_status' => 'Booking Payment Status',
            'booking_booked_by' => 'Booking Booked By',
            'booking_created_by' => 'Booking Created By',
            'booking_created_date_time' => 'Booking Created Date Time',
            'booking_extra_type_description' => 'Booking Extra Type Description',
            'extra_qty' => 'Extra Qty',
            'extra_unit_price' => 'Extra Unit Price',
            'extra_net_price' => 'Extra Net Price',
            'extra_vat' => 'Extra Vat',
            'extra_total' => 'Extra Total',
            'booking_movement_id' => 'Booking Movement ID',
            'movement_pax' => 'Movement Pax',
            'movement_pickup_date_time' => 'Movement Pickup Date Time',
            'movement_pickup_address' => 'Movement Pickup Address',
            'movement_pickup_postcode' => 'Movement Pickup Postcode',
            'movement_drop_address' => 'Movement Drop Address',
            'movement_drop_postcode' => 'Movement Drop Postcode',
            'movement_status' => 'Movement Status',
            'movement_net_price' => 'Movement Net Price',
            'movement_vat' => 'Movement Vat',
            'movement_total' => 'Movement Total',
            'movement_description' => 'Movement Description',
            'movement_ref1' => 'Movement Ref1',
            'movement_ref2' => 'Movement Ref2',
            'vehicle_size' => 'Vehicle Size',
            'vehicle_unit_price' => 'Vehicle Unit Price',
            'vehicle_vat_amount' => 'Vehicle Vat Amount',
            'vehicle_total_price' => 'Vehicle Total Price',
        ];
    }
   
}

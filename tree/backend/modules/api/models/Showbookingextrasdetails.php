<?php

namespace frontend\modules\api\models;

use Yii;

/**
 * This is the model class for table "showbookingextrasdetails".
 *
 * @property int|null $booking_extra_id
 * @property int|null $extra_id
 * @property int|null $booking_extra_type_id
 * @property string|null $booking_extra_type_description
 * @property float|null $extra_qty
 * @property float|null $extra_unit_price
 * @property float|null $extra_net_price
 * @property float|null $extra_vat
 * @property float|null $extra_total
 * @property int $booking_movement_id
 * @property int $booking_id
 */
class Showbookingextrasdetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'showbookingextrasdetails';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['booking_extra_id', 'extra_id', 'booking_extra_type_id', 'booking_movement_id', 'booking_id'], 'integer'],
            [['extra_qty', 'extra_unit_price', 'extra_net_price', 'extra_vat', 'extra_total'], 'number'],
            [['booking_id'], 'required'],
            [['booking_extra_type_description'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'booking_extra_id' => 'Booking Extra ID',
            'extra_id' => 'Extra ID',
            'booking_extra_type_id' => 'Booking Extra Type ID',
            'booking_extra_type_description' => 'Booking Extra Type Description',
            'extra_qty' => 'Extra Qty',
            'extra_unit_price' => 'Extra Unit Price',
            'extra_net_price' => 'Extra Net Price',
            'extra_vat' => 'Extra Vat%',
            'extra_total' => 'Extra Total',
            'booking_movement_id' => 'Booking Movement ID',
            'booking_id' => 'Booking ID',
        ];
    }
}

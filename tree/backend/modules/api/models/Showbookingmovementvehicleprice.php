<?php

namespace frontend\modules\api\models;

use Yii;

/**
 * This is the model class for table "showbookingmovementvehicleprice".
 *
 * @property int $movement_id
 * @property int $vehicle_size_id
 * @property int $vehicle_size
 * @property float $vehicle_unit_price
 * @property float $vehicle_vat_amount
 * @property float $vehicle_total_price
 */
class Showbookingmovementvehicleprice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'showbookingmovementvehicleprice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['movement_id', 'vehicle_size', 'vehicle_unit_price', 'vehicle_vat_amount', 'vehicle_total_price'], 'required'],
            [['movement_id', 'vehicle_size_id', 'vehicle_size'], 'integer'],
            [['vehicle_unit_price', 'vehicle_vat_amount', 'vehicle_total_price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'movement_id' => 'Movement ID',
            'vehicle_size_id' => 'Vehicle Size ID',
            'vehicle_size' => 'Vehicle Size',
            'vehicle_unit_price' => 'Vehicle Unit Price',
            'vehicle_vat_amount' => 'Vehicle Vat Amount',
            'vehicle_total_price' => 'Vehicle Total Price',
        ];
    }
}

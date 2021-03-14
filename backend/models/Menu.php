<?php

namespace backend\models;

use Yii;
use yii\helpers\Url;
/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 * @property string $status
 * @property string $has_child
 * @property string $created_at
 * @property string|null $updated_at
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['parent_id'], 'integer'],
            //[['having_child'], 'integer'],
            [['created_at', 'updated_at','having_child'], 'safe'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            'name' => 'Name',
            'parent_id' => 'Parent',
            'status' => 'Status',
            'having_child' => 'Has Child',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function parentName($pid){
        $name = Menu::find()->where(' id = "'.$pid.'"')->one();
        if(!empty($name)){
            return $name->name;
        }
    }

    public function categories($parent = 0, $cat_array = '') {
        if (!is_array($cat_array))
        $cat_array = array();
        $getDatas = Menu::find()->select('id,name,parent_id')->where('parent_id="'.$parent.'" ')->orderBy('id')->all();
        if(count($getDatas) > 0) {
        $cat_array[] = "<ul>";
        foreach($getDatas as $row){
            $cat_array[] = "<li><a href='".Url::base('')."/site/index?catname=$row->name'>". $row->name."</a></li>";
            $cat_array = Menu::categories($row->id, $cat_array);
        }
        $cat_array[] = "</ul>";
        }
        return $cat_array;
    }

    function getCategoryData($parent=0)
    {
        $arr = array();
        $getDatas = Menu::find()->select('id,name,parent_id')->where('parent_id="'.$parent.'" ')->orderBy('id')->all();
        if(count($getDatas) > 0) {
            foreach($getDatas as $row){ 
                $arr[] = array(
                "title" => $row->name,
                "children" => Menu::getCategoryData($row->id)
                );
            }
        }
        return $arr;
    }
    
    public function getBreadcrumb($categoies, $searchfor,&$result) {
        $result = array();
        if (is_array($categoies)) {
            foreach ($categoies as $node => $value) {
                if (strtolower($value['title']) == strtolower($searchfor)) {
                    $result[] = $value['title'];
                    return $result;
                } else if (!empty($value['children'])) {
                    if (Menu::getBreadcrumb($value['children'], $searchfor,$result)){
                    $result[] = "<a href='".Url::base('')."/site/index?catname=".$value['title']."'>".$value['title']."</a>";
                    return $result;
                    }
                }
            }
        } else {
            if (strtolower($categoies) == strtolower($searchfor)) {
                $result[] = $categoies;
                return $result;
            }
        }
        return false;
    }
}

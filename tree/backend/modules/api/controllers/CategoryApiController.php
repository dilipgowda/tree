<?php

namespace backend\modules\api\controllers;
use yii;
use yii\web\NotFoundHttpException;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\ForbiddenHttpException;
use frontend\models\Functions;
use backend\models\Menu;

class CategoryApiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGetbreadcrumb(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        try
        {
            $get_data = \Yii::$app->request->get();
            $catname = isset($get_data['catname'])?$get_data['catname']:'';
            $cat = Menu::getCategoryData();
            Menu::getBreadcrumb($cat, $catname,$result);
            $data = implode(" >> ",array_reverse($result));
            if(!empty($data) ){
                return array("status" => "success","data"=>$data);
            }
            else {
                return array("status" => "no data","data"=>array());
            }
        } catch(\Exception $ex){
            return array("status" => $ex,"data"=>array());
        }
       
    }

    
}
<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Menu;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            [
                'attribute' => 'parent_id',
                'format' => 'raw',
                'value' => function ($data) {
                    if($data->parent_id!=0){
                        return $data->parentName($data->parent_id);
                      
                    } else{
                        return 'Parent';
                    }
                },  
            ],
            'created_at',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

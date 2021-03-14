<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Menu;
/* @var $this yii\web\View */
/* @var $model backend\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    
    <?php if(!$model->isNewRecord){
        echo  $form->field($model, 'parent_id')->dropDownList( ArrayHelper::map(Menu::find()->where(' name != "'.$model->name.'"')->all(), 'id', 'name'),['prompt'=>'Select parent Type']);
    } else {
       echo  $form->field($model, 'parent_id')->dropDownList( ArrayHelper::map(Menu::find()->all(), 'id', 'name'),['prompt'=>'Select parent Type']);
    }
    ?>

    <?php // echo $form->field($model, 'having_child')->dropDownList([ '0' => 'no', '1' => 'yes', ], ['prompt' => 'Select']) ?>

    <?php //echo $form->field($model, 'has_child')->dropDownList([ 'false' => 'False', 'true' => 'True', ], ['prompt' => '']) ?>

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

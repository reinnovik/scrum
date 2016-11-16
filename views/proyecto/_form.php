<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\Estado;
use  yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Proyecto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyecto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

     <?php echo $form->field($model,'fecha_inicio')->
     widget(DatePicker::className(),[
        'name' => 'dp_1',
    'type' => DatePicker::TYPE_INPUT,
    'value' => '',
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy/mm/dd',]
    ]) ?>

     <?php echo $form->field($model,'fecha_cierre')->
     widget(DatePicker::className(),[
        'name' => 'dp_1',
    'type' => DatePicker::TYPE_INPUT,
    'value' => '',
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy/mm/dd',]
    ]) ?>

    <?= $form->field($model, 'estado')->hiddenInput(['value'=> 'Abierto'])->label(false); ?>

    <?= $form->field($model, 'username')->hiddenInput(['value'=> Yii::$app->user->identity->username])->label(false); ?>

    <?= $form->field($model, 'rol')->hiddenInput(['value'=> 'Administrador'])->label(false); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

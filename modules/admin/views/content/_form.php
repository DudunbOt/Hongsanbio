<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
/** @var yii\web\View $this */
/** @var app\modules\admin\models\content\Contents $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="contents-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->widget(CKEditor::classname(),[
        'options' => ['rows' => 6],
        'preset' => 'full'
      ]) ?>

    <?= $form->field($model, 'tag')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Nested Row within Card Body -->
<div class="row">
    <div class="col-lg-12">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
            </div>
            <?php $form = ActiveForm::begin([
              'id' => 'login-form',
              'options' => ['class' => 'user'],
            ]); ?>

            <?= $form->field($model, 'username', [
                'inputOptions' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Enter your username'
                ]
              ])->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password', [
                'inputOptions' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Enter your password'
                ]
              ])->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <?= Html::submitButton('Login', ['class' => 'btn btn-success btn-user btn-block', 'name' => 'login-button']) ?>
            <?php ActiveForm::end() ?>
            <hr>
            <div class="text-center">
              <a href="<?= \yii\helpers\Url::to(['/site/request-password-reset']) ?>">Forgot Password?</a>
            </div>

        </div>
    </div>
</div>
</div>

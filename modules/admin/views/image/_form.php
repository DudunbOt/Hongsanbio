<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\image\Images $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="images-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'content_id')->widget(Select2::classname(), [
                        'data' => [
                          1 => 'Banner',
                          2 => 'Tentang Kami',
                          3 => 'Maksud dan Tujuan',
                          4 => 'Tahapan Renovasi',
                          5 => 'Dokumentasi',
                          6 => 'Proses 12-10-18',
                          7 => 'Proses 09-12-18',
                          8 => 'Proses 24-12-18',
                          9 => 'Proses 19-03-19',
                          10 => 'Proses 07-03-19',
                          11 => 'Proses 07-04-20',
                          12 => 'Proses 19-04-20',
                          13 => 'Proses 09-08-20',
                          14 => 'Proses 26-08-20',
                          15 => 'Proses 12-09-20',
                          16 => 'Proses 31-12-20',
                          17 => 'Arsitek Bangunan Utama',
                          18 => 'Arsitek Bangunan Pendamping',
                          19 => '3D Preview',
                          20 => 'Call to Arms',
                          21 => 'Gambar Luas dan Besar Turap',
                          22 => 'Digital Globe',
                          23 => 'Map',
                          24 => 'Payung Hukum',
                          25 => 'Pengurus Inti',
                          26 => 'Donasi',
                          27 => 'Thank You',
                        ],
                        'options' => ['placeholder' => '', 'multiple' => false, 'required' => true],
                        'theme' => Select2::THEME_KRAJEE,
                        'size' => 'md',
                    ])->label('Sections');
                    ?>


    <?= $form->field($model, 'img_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img_subtitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->widget(FileInput::classname(), [
                'options' => ['multiple' => false, 'accept' => 'image/*'],
                'pluginOptions' => [
                    'previewFileType' => 'any',
                    'showUpload' => false
                ]
            ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

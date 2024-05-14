<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->radioList([ 'Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan']) ?>

    <?= $form->field($model, 'prodi')->dropDownList([
        'Sistem Informasi' => 'Sistem Informasi',
        'Teknik Informatika' => 'Teknik Informatika',
        'Manajemen Informatika' => 'Manajemen Informatika',
        'Komputerisasi Akuntansi' => 'Komputerisasi Akuntansi']) ?>

    <?= $form->field($model, 'makul')->checkboxList([
        'E-Business' => 'E-Business',
        'Desain E-Business' => 'Desain E-Business',
        'Drakor' => 'Drakor',
        'Pengembangan Aplikasi Sistem Enterprise' => 'Pengembangan Aplikasi Sistem Enterprise']) ?>

    <?=$form->field($model, 'tgl_masuk')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Enter birth date ...'],
    'pluginOptions' => [
        'autoclose' => true,
        'format' => 'yyyy-mm-dd'
        ]
     ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Shop - Profile';
$this->params['breadcrumbs'][] = "Profile";
?>
<div class="site-signup">
    <h1>Profile</h1>
    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'age') ?>
            <div class="form-group">
                <?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Shop - Login';
?>
<div class="site-login">
    <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
            <div class="sign-in-form">
                <div class="sign-in-form-top">
                    <h1>Log in</h1>
                </div>
                <div class="signin">
                    <?php
                    $form = ActiveForm::begin([
                        'id' => 'login-form'
                    ]);
                    ?>
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>
                    <?= Html::submitButton('Login') ?>
                    <?php ActiveForm::end(); ?>
                </div>
                <div>
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>
                <div class="new_people">
                    <h2>For New People</h2><br/><br/>
                    <a href="/site/signup">Register Now!</a>
                </div>
            </div>
        </div>
    </div>
</div>
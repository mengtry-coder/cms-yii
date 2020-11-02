<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\ActiveForm;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

DashboardAsset::register($this);
?>
            <?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'user']); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control form-control-user', 'id' => 'exampleInputEmail', 'aria-describedby' => 'emailHelp', 'placeholder' => 'Enter Username...']) ?>
      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control form-control-user', 'id' => 'exampleInputPassword', 'placeholder' => 'Password']) ?>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label class="">
              <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Remember Me
            </label>
          </div>
        </div>
        <div class="form-group">
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-user btn-block', 'name' => 'login-button']) ?>
      </div>
    <?php ActiveForm::end(); ?>
    
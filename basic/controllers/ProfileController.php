<?php
/**
 * Created by PhpStorm.
 * User: ghandour
 * Date: 17/02/19
 * Time: 15:15
 */

namespace app\controllers;

use app\models\Profile;
use Yii;
use yii\web\Controller;
use app\models\User;

class ProfileController extends Controller
{
    public function actionIndex()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new Profile();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->goHome();
        }
        $model = Profile::findOne(Yii::$app->user->identity->id);
        if($model){
            return $this->render('index', ["model" => $model]);
        }
        return $this->redirect(['/site']);
    }
}
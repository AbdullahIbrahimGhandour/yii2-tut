<?php
/**
 * Created by PhpStorm.
 * User: ghandour
 * Date: 17/02/19
 * Time: 11:58
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Category;
use app\models\Product;

class ProductController extends Controller
{
    public function actionIndex()
    {
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = ($_GET['id']);
            $model = Product::find()->where('id = :ID', [':ID' => $id])->one();
            if(empty($model))
                return $this->redirect(['/site']);
            $cat = Category::find()->select('id, name')->where('id = :ID', [':ID' => $model->category_id])->one();
            return $this->render('index', ["model" => $model, "cid" => $cat]);
        }
        else {
            return $this->redirect(['/site']);
        }
    }
}
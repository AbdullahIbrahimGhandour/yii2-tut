<?php
/**
 * Created by PhpStorm.
 * User: ghandour
 * Date: 17/02/19
 * Time: 11:52
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\Category;
use app\models\Product;
use yii\data\Pagination;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        if(isset($_GET['c']) && !empty($_GET['c'])){
            $c = ($_GET['c']);
            $model = Category::find()->select('id');
            if($c < 1 || $c > $model->count())
                return $this->redirect(['/site']);
            $model = Product::find()->where('category_id = :CID', [':CID' => $c]);
            $cat = Category::find()->where('id = :CAT', [':CAT' => $c])->one();
            $count = $model->count();
            $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 5, 'defaultPageSize' => 5, 'route' => '/category']);
            $model = $model->offset($pagination->offset)->limit($pagination->limit)->orderBy('name')->all();
            return $this->render('index', ["model" => $model, "cat" => $cat, "pagination" => $pagination]);
        }
        else {
            return $this->redirect(['/site']);
        }
    }
}
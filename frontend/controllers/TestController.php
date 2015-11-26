<?php
namespace frontend\controllers;

use Yii;
use yii\db\Query;
use yii\web\Controller;

/**
 * Site controller
 */
class TestController extends Controller
{
   public function actionIndex()
   {
       $name = (new Query())->from('{{%partner}}')->select('name')->where(['id'=>1])->scalar();
       echo $name;die;
   }
}

<?php
/**
 * Created by PhpStorm.
 * User: madmax
 * Date: 18.11.2018
 * Time: 12:25
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;

class TopicController extends Controller
{
    public function actionPhis1($taskId) {
        $this->render('phis1', []);
    }
}
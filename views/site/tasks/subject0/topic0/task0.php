<?php
/**
 * Created by PhpStorm.
 * User: madmax
 * Date: 18.11.2018
 * Time: 14:03
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;


$form = ActiveForm::begin([
    'action' => '/order/create',
    'id' => 'order-form'
]);

echo Html::img('@web/uploads/img/snap3118.jpg', ['alt'=>'some', 'class'=>'thing']);

echo Html::input('text', 'field1', '123');
echo Html::input('text', 'field2', '123');
echo Html::input('text', 'field3', '123');
echo Html::input('text', 'field4', '123');

echo Html::submitButton('Получить решение');
ActiveForm::end();



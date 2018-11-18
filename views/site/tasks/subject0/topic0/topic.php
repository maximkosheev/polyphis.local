<?php
/**
 * Created by PhpStorm.
 * User: madmax
 * Date: 18.11.2018
 * Time: 14:40
 * @var \yii\web\View $this
 * @var $task
 */

use yii\helpers\Url;

$this->params['menuItems'] = [
    ['label' => 'Задача 1', 'url' => Url::to(['site/task', 'subject'=>0, 'topic' => 0, 'task' => 0])],
    ['label' => 'Задача 2', 'url' => Url::to(['site/task', 'subject'=>0, 'topic' => 0, 'task' => 1])],
    ['label' => 'Задача 3', 'url' => Url::to(['site/task', 'subject'=>0, 'topic' => 0, 'task' => 2])],
    ['label' => 'Задача 4', 'url' => Url::to(['site/task', 'subject'=>0, 'topic' => 0, 'task' => 3])],
    ['label' => 'Задача 5', 'url' => Url::to(['site/task', 'subject'=>0, 'topic' => 0, 'task' => 4])],
    ['label' => 'Задача 6', 'url' => Url::to(['site/task', 'subject'=>0, 'topic' => 0, 'task' => 5])],
    ['label' => 'Задача 7', 'url' => Url::to(['site/task', 'subject'=>0, 'topic' => 0, 'task' => 6])],
    ['label' => 'Задача 8', 'url' => Url::to(['site/task', 'subject'=>0, 'topic' => 0, 'task' => 7])],
    ['label' => 'Задача 9', 'url' => Url::to(['site/task', 'subject'=>0, 'topic' => 0, 'task' => 8])],
    ['label' => 'Задача 10', 'url' => Url::to(['site/task', 'subject'=>0, 'topic' => 0, 'task' => 9])],
];

$this->params['menuItems'][$task]['options'] = ['class' => 'active'];
echo $this->render("task$task");
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="http://bootstraptema.ru/plugins/2016/bootsnav/bootsnav.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://bootstraptema.ru/plugins/2016/bootsnav/bootsnav.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php
$subjects = [
    [
        'subject' => 'Физика 1 семестр',
        'alt' => 'Физика 1 семестр',
        'topics' => [
            'Киниматика материальной точки и твердого тела',
            'Классическая динамика. Силы в природе. Законы Ньютона',
            'Законы сохранения энергии и импульса',
            'Закон сохранения момента импульса. Динамика твердого тела',
            'Механические колебания',
            'Тепловые процессы в идеальном газе. Первое начало термодинамики',
            'Энтропия. Второе начало термодинамики. Тепловые машины',
            'Статистическое описание многочастичных систем. Распределения Максвелла и Больцмана',
            'Явления переноса. Реальные газы',
            'Итоговый',
        ]
    ],
    [
        'subject' => 'Физика 2 семестр',
        'alt' => 'Физика 2 семестр',
        'topics' => [
            'Тема 1',
            'Тема 2',
            'Тема 3',
            'Тема 4',
            'Тема 5',
            'Тема 6',
            'Тема 7',
            'Тема 8',
            'Тема 9',
            'Тема 10',
            'Тема 11'
        ]
    ],
    [
        'subject' => 'Высшая математика 1 семестр',
        'alt' => 'Высшая математика 1 семестр',
        'topics' => [
            'Линейная алгебра',
            'Векторная алгебра',
            'Аналитическая геомертрия',
            'Введение в математический анализ',
            'Итоговый'
        ]
    ],
    [
        'subject' => 'Высшая математика 2 семестр',
        'alt' => 'Высшая математика 2 семестр',
        'topics' => [
            'Тема 1',
            'Тема 2',
            'Тема 3',
            'Тема 4',
            'Итоговый'

        ]
    ],
    [
        'subject' => 'Высшая математика 3 семестр',
        'alt' => 'Высшая математика 3 семестр',
        'topics' => [
                'Тема 1',
                'Тема 2',
                'Тема 3',
                'Итоговый'

        ]
    ],
    [
        'subject' => 'Начертательная геометрия',
        'alt' => 'Начертательная геометрия',
        'topics' => []
    ],
    [
        'subject' => 'Инженерная графика',
        'alt' => 'Инженерная графика',
        'topics' => []
    ]
];
?>

<div class="main-menu">

    <nav class="navbar navbar-default navbar-mobile bootsnav">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
                <?php
                $subjectId = 0;
                foreach($subjects as $subject) {
                    echo '<li class="dropdown" alt='.$subject['alt'].'>';
                    echo Html::a($subject['subject'], '#',
                        [
                            'class' => 'dropdown-toggle',
                            'data-toggle' => "dropdown"
                        ]);
                    echo '<ul class="dropdown-menu">';
                    $topicId = 0;
                    foreach($subject['topics'] as $topic) {
                        echo '<li>'.Html::a($topic, ['site/task',
                                'subject'=>$subjectId,
                                'topic' => $topicId,
                                'task' => 0]).'</li>';
                        $topicId += 1;
                    }
                    echo '</ul>';
                    echo '</li>';
                    $subjectId += 1;
                }
                ?>
            </ul>
        </div>
    </nav>

</div><!-- ./container -->

<div class="wrap">
    <div class="side-menu">
        <?= Menu::widget([
            'items' => isset($this->params['menuItems']) ? $this->params['menuItems'] : []

        ]) ?>
    </div>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; polyphis.ru <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

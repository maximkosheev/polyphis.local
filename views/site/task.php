<?php
/**
 * Created by PhpStorm.
 * User: madmax
 * Date: 18.11.2018
 * Time: 13:59
 * @var \yii\web\View $this
 * @var $subject
 * @var $topic
 * @var $task
 */

?>

<?php
echo $this->render("tasks/subject$subject/subject", [
    'topic' => $topic,
    'task' => $task
]);
?>
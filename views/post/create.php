<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblNews */

$this->title = 'Create Tbl News';
$this->params['breadcrumbs'][] = ['label' => 'Tbl News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

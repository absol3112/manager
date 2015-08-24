<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->product_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="#" class="img-responsive" alt="Image">
    </div>
    
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'code',
            'cost',
            'number',
        ],
    ]) ?>
    </div>

</div>

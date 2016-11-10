<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategoriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categoria-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!-- 
        < ?= Html::a('Create Categoria', ['create'], ['class' => 'btn btn-success']) ?>
        -->
        <?= Html::button('Criar Categoria', ['value'=>Url::to('index.php?r=categoria/create'), 'class' => 'btn btn-success', 'id'=>'modalButton']) ?>
    </p>
    
    <?php
        Modal::begin([
            'header' => '<h4>Criar categoria</h4>',
            'id' => 'modal',
            'size' => 'modal-lg',
            ]);
            
            echo "<div id='modalContent'></div>";
            
            Modal::end();
    ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codecate',
            'nomecate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

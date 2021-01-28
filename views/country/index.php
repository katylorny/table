<?php

use app\assets\CountryAsset;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

CountryAsset::register($this);

$this->title = 'Countries';
/*$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!--<p>
        <?/*= Html::a('Create Country', ['create'], ['class' => 'btn btn-success']) */?>
    </p>-->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="country-wrapper">
        <?= GridView::widget([
            'dataProvider' => new $dataProvider([
                'query'      =>$searchModel::find(),
                'pagination' => false,
            ]),
            /*'filterModel' => $searchModel,*/
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                /*'id',*/
                'name',
                'age',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>

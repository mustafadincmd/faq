<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\faq\models\FaqsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Faq Listesi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'soru',
            'cevap',
            'telefon',
            'adres',

            [  
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} ',
                        
            ],
        ],
    ]); ?>

        <ul>
        
        <?php foreach ($faqs as $faq){?>  <li>
        <?php echo $faq['soru']; ?>
        </li>
        <?php } ?>
        </ul>

</div>

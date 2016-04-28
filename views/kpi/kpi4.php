<?php

//use yii\grid\GridView;
use kartik\grid\GridView;

$this->title = 'KPI4';
$this->params['breadcrumbs'][] = [
    'label' => 'KPI Menu',
    'url' => [
        '/kpi/index',
    ]
];
$this->params['breadcrumbs'][] = $this->title;


?>
<?= GridView::widget([
    'dataProvider'=>$dataProvider,
    'panel'=>[
        'before'=>'',
    ],
    'floatHeader' => true,
    'tableOptions' => [
        'class' => 'table 
            table-striped 
            table-bordered 
            table-responsive 
            table-hover'
    ],
    'headerRowOptions'=>['class'=>'warning'],
    'columns'=>[
        [
            'label'=>'ตัวชี้วัด',
            'attribute'=>'kpiname',
            'headerOptions'=>['class'=>'text-center'],
        ],
        [
            'label'=>'ตัวตั้ง',
            'attribute'=>'divide',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-right'],
            'format'=>['decimal',0],
        ],
        [
            'label'=>'ตัวหาร',
            'attribute'=>'denom',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-right'],
            'format'=>['decimal',0],
        ],
        [
            'label'=>'ผลลัพธ์',
            'attribute'=>'result',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-right'],
            'format'=>['decimal',2],
        ],
        [
            'label'=>'เป้าหมาย',
            'attribute'=>'target',
            'headerOptions'=>['class'=>'text-center'],
            'contentOptions'=>['class'=>'text-right'],
            'format'=>['decimal',2],
        ],
    ]
]);
?>

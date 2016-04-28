<?php

use yii\grid\GridView;
$this->title = 'KPI1';
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
    'tableOptions' => [
        'class' => 'table 
            table-striped 
            table-bordered 
            table-responsive 
            table-hover'
    ],
    'headerRowOptions'=>['class'=>'success'],
    'columns'=>[
        'kpiname',
        'divide',
        'denom',
        'result',
        'target'
    ]
]);
?>

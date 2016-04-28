<?php

use yii\grid\GridView;

?>
<?= GridView::widget([
    'dataProvider'=>$dataProvider,
    'tableOptions' => [
        'class' => 'table table-striped table-bordered table-responsive table-hover'
    ],
    'headerRowOptions'=>['class'=>'success']
]);
?>

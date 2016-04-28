<?php
$gdata = $dataProvider->getModels();

use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\Yearselect;

use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;
HighchartsAsset::register($this)
        ->withScripts([
	'highcharts-more', 
        'themes/grid'
            
]);
$xname =[];
$result = [];
$target = [];
for ($i = 0; $i < count($gdata); $i++) {
    $xname[] = $gdata[$i]['kpiname'];
    $result[] = $gdata[$i]['result'];
    $target[] = $gdata[$i]['target'];
}
$xlabel = implode("','", $xname);
$rvalue = implode(",", $result);
$tvalue = implode(",", $target);

$y = isset($_REQUEST['year'])?$_REQUEST['year']:date('Y');
?>

<?= Html::beginForm(); ?>
<?= Html::label('ปีงบประมาณ') ?>
<?= Html::dropDownList('year', $y, ArrayHelper::map(
    Yearselect::find()->orderBy('yearvalue desc')->all(),
    'yearvalue', 'yearthai'),
    ['class' => 'form-control', 'prompt' => 'โปรดเลือกปี...', 'required' => true]);
?>
<?= Html::submitButton('ค้นหา',['class'=>'btn btn-primary']); ?>
<?=Html::endForm(); ?>

<div id="chart2"></div>
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

<?php
$this->registerJs("
$(function () {
    $('#chart2').highcharts({
        title: {
            text: 'Combination chart'
        },
        xAxis: {
            categories: ['$xlabel']
        },
        labels: {
            items: [{
                html: 'Total fruit consumption',
                style: {
                    left: '50px',
                    top: '18px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },
        series: [{
            type: 'column',
            name: 'ผลลัพธ์',
            data: [$rvalue]
        }, {
            type: 'spline',
            name: 'เป้าหมาย',
            data: [$tvalue],
            marker: {
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'white'
            }
        }]
    });
});

");
?>
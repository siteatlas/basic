<?php
$kpidata = $dataProvider->getModels();

use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;
HighchartsAsset::register($this)
        ->withScripts([
	'highcharts-more', 
        'themes/grid'
            
]);

?>
<h2><?= $kpidata[0]['kpiname'] ?></h2>
<br />
<div id="container" 
     style="min-width: 310px; 
     max-width: 400px; 
     height: 300px; 
     margin: 0 auto">
</div>
<br />
<table class="table table-hover table-striped">
    <tr>
        <td><?= $kpidata[0]['acol'] ?></td>
        <td><?= number_format($kpidata[0]['divide'],0) ?></td>
    </tr>
    <tr>
        <td><?= $kpidata[0]['bcol'] ?></td>
        <td><?= number_format($kpidata[0]['denom'],0) ?></td>
    </tr>
    <tr>
        <td style="text-align: right">ผลลัพธ์</td>
        <td><?= number_format($kpidata[0]['result'],2) ?></td>
    </tr>
    <tr>
        <td style="text-align: right">เป้าหมาย</td>
        <td><?= number_format($kpidata[0]['target'],2) ?></td>
    </tr>
</table>
<?php
$target = $kpidata[0]['target'];
$result = $kpidata[0]['result'];
$name = $kpidata[0]['kpiname'];
$consider = $target > $result ? "ไม่ผ่าน" : "ผ่าน" ;
$percent_color = $target > $result ? "red" : "green" ;
?>
<?php
// $this->registerJs(" 
// ....
// ");
$this->registerJs("
$(function () {

    $('#container').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: '$name'
        },
        credits: {
        // 'enabled':false
            text:  '$consider',
            href: 'http://www.google.co.th',
            style: {
                   //backgroundImages: 'url(http://placehold.it/50x20)',
                   fontSize: '20pt',
                   color: '$percent_color'
            },
            position:{
                    align: 'center',
                    y: -5
            }
        },
        pane: {
            startAngle: -90,
            endAngle: 90,
            background: null
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            minorTickInterval: 'auto',
            minorTickWidth: 1,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#666',

            tickPixelInterval: 30,
            tickWidth: 2,
            tickPosition: 'inside',
            tickLength: 10,
            tickColor: '#666',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'ร้อยละ'
            },
            plotBands: [{
                from: 0,
                to: $target,
                color: '#DF5353' // red
            }, {
                from: $target,
                to: 100,
                color: '#55BF3B' // green
            }]
        },

        series: [{
            name: 'ผลลัพธ์',
            data: [$result],
            tooltip: {
                valueSuffix: ' $consider'
            }
        }]

    });
});
");
?>
<?php
$this->title = 'KPI System Menu';
$this->params['breadcrumbs'][] = $this->title;

// copy มาจากตัวอย่าง page4
// เพื่อทำระบบเมนู
$link1 = Yii::$app->urlManager->createUrl(['kpi/kpi1',]);
$link2 = Yii::$app->urlManager->createUrl(['kpi/kpi2',]);
$link3 = Yii::$app->urlManager->createUrl(['kpi/kpi3',]);
$link4 = Yii::$app->urlManager->createUrl(['kpi/kpi4',]);
$link5 = Yii::$app->urlManager->createUrl(['chart/chart4',]);

?>
<h1>first/index</h1>
<!-- ส่วนแสดงค่าเมนู -->
<table class="table table-hover table-responsive table-striped">
    <thead>
        <tr class="warning">
            <th>#</th>
            <th>เมนู</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>#</td>
            <td><a href="<?= $link1 ?>">แสดงตัวชี้วัด QOF</a></td>
        </tr>
        <tr>
            <td>#</td>
            <td><a href="<?= $link2 ?>">แสดงผลลัพธ์ตัวชี้วัด Link1</a></td>
        </tr>
        <tr>
            <td>#</td>
            <td><a href="<?= $link3 ?>">ตัวชี้วัด Link3 Yii GridView</a></td>
        </tr>
        <tr>
            <td>#</td>
            <td><a href="<?= $link4 ?>">ตัวชี้วัด Link4 Kartik GridView</a></td>
        </tr>
        <tr>
            <td>#</td>
            <td><a href="<?= $link5 ?>">แสดงผลลัพธ์ตัวชี้วัด QOF</a></td>
        </tr>
    </tbody>
</table>


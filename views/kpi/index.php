<?php
$this->title = 'KPI System Menu';
$this->params['breadcrumbs'][] = $this->title;

// copy มาจากตัวอย่าง page4
// เพื่อทำระบบเมนู
$link1 = Yii::$app->urlManager->createUrl([
    'kpi/kpi1',
    ]);
$link2 = Yii::$app->urlManager->createUrl([
    'kpi/kpi2',
    ]);

?>
<h1>first/index</h1>
<!-- ส่วนแสดงค่าเมนู -->
<a href="<?= $link1 ?>">
    1. แสดงตัวชี้วัด QOF
</a>
<br />
<a href="<?= $link2 ?>">
    2. แสดงผลลัพธ์ตัวชี้วัด QOF
</a>

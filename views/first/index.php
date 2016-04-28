<?php
$this->title = 'First Menu';
$this->params['breadcrumbs'][] = $this->title;

// copy มาจากตัวอย่าง page4
// เพื่อทำระบบเมนู
$link1 = Yii::$app->urlManager->createUrl([
    'first/page1',
    ]);

?>
<h1>first/index</h1>
<!-- ส่วนแสดงค่าเมนู -->
<a href="<?= $link1 ?>">
    1. การแสดงค่าจาก view
</a>

<?php

echo $name;
echo "<hr />";
$link1 = Yii::$app->urlManager->createUrl([
    'first/page4',
    'xname'=>'Wirote',
    'yname'=>'Thudsaringkansakul'
    ]);
$link2 = Yii::$app->urlManager->createUrl([
    'first/page4',
    'xname'=>'วิโรจน์',
    'yname'=>'ธัชศฤงคารสกุล'
    ]);
?>
<a href="<?= $link1 ?>">ส่งค่าภาษาอังกฤษ</a>
<hr />
<a href="<?= $link2 ?>">ส่งค่าภาษาไทย</a>
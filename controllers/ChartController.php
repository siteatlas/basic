<?php

namespace app\controllers;

class ChartController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionChart1() {
        return $this->render('chart1');
    }

    public function actionChart2() {
        return $this->render('chart2');
    }

    
}

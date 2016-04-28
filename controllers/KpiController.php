<?php

namespace app\controllers;
use yii\data\ArrayDataProvider;

class KpiController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionKpi1() {
        $sql = "select k.kpiname, k.acol,
 k.bcol, k.target from kpi k ";
        $data = \Yii::$app->db->createCommand($sql)
                ->queryAll();
        //$dataProvider = new \yii\data\ArrayDataProvider()
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data
        ]);
        return $this->render('kpi1',[
            'dataProvider'=>$dataProvider
        ]);
    }

    
}

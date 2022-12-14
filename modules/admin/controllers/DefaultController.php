<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

use yii\filters\AccessControl;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

     public function behaviors()
     {
         return array_merge(
             parent::behaviors(),
             [
                 'access' => [
                     'class' => AccessControl::className(),
                     'rules' => [
                         [
                             'allow' => true,
                             'roles' => ['@'],
                         ],
                     ],
                 ],
             ]
         );
     }
     
    public function actionIndex()
    {
        return $this->render('index');
    }
}

<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\View;

class TestController extends AppController
{

    // public $defaultAction = 'my-test';

    public $my_var;
    // public $layout = 'test'; 
    public function actions()
    {
        return [
            'test' => 'app\components\HelloAction',
        ];
    }

    public function actionIndex()
    {
        // debug(\Yii::getAlias('@webroot'));
        // debug(\Yii::getAlias('@web'));
        // return $this->renderFile('@app/views/test/index.php');
        // return $this->renderAjax('index');
        // return $this->renderPartial('index');
        $this->layout = 'test';

        $this->my_var = 'My variable';
        $var = 5;
        // return $this->render('index', ['var' => 5]);
        // debug(\Yii::$app);
        // \Yii::$app->view->params['t1'] = 't1 params';
        //or this way
        $this->view->params['t1'] = 't1 params';
        $this->view->title = 'Test page';

        $this->view->registerMetaTag(['name' => 'description', 'content' => 'мета-описание...'], 'description');
        \Yii::$app->view->on(View::EVENT_END_BODY, function () {
            echo "<p>&copy;".date('Y')."</p>";
        });

        return $this->render('index', compact('var'));
    }
    public function actionMyTest()
    {
        return $this->render('my-test');
    }
}

<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of TestController
 *
 * @author ponomarenko.evgen
 */
namespace w3color\mytest\controllers;

use Yii;
use yii\web\Controller;
use w3color\mytest\models\Tests;

class TestController extends Controller
{
    //public $layout = 'main';
    public function actionIndex()
    {
        // регистрируем ресурсы:
        \w3color\mytest\TestsAssetsBundle::register($this->view);
        $datas = Tests::find()->all();
        return $this->render('index',[
            'datas' => $datas
        ]);
    }
}
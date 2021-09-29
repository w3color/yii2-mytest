<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Tests
 *
 * @author ponomarenko.evgen
 */

namespace w3color\mytest\models;
use Yii;
use yii\db\ActiveRecord;

class Tests extends ActiveRecord
{
    public function rules()
    {
        return [
            [['ip'], 'ip'],
            [['comment'], 'required'],
        ];
    }
}
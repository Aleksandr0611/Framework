<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 10.06.2017
 * Time: 13:22
 */

namespace app\controllers\admin;

use fw\core\base\View;

class UserController extends AppController{

//    public $layout = 'default';

    public function indexAction(){
        View::setMeta('Админка :: Главная страница', 'Описание админки', 'Ключевики админки');
        $test = 'Тестовая переменная';
        $data = ['test', '2'];
        /*$this->set([
            'test' => $test,
            'data' => $data,
        ]);*/
        $this->set(compact('test', 'data'));
    }

    public function testAction(){
//        $this->layout = 'admin';
    }

}
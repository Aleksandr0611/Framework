<?php

namespace app\controllers;

/**
 * Description of App
 *
 */
class AppController extends \fw\core\base\Controller{
    
    public $menu;
    public $meta = [];
    
    public function __construct($route) {
        parent::__construct($route);
//        if($this->route['controller'] == 'Main' && $this->route['action'] == 'test'){
//            echo '<h1>TEST</h1>';
//        }
        new \app\models\Main;
        $this->menu = \R::findAll('category');
    }
    
    protected function setMeta($title = '', $desc = '', $keywords = ''){
        $this->meta['title'] = $title;
        $this->meta['desc'] = $desc;
        $this->meta['keywords'] = $keywords;
    }
    
}

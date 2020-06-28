<?php


namespace app\controllers;

use app\models\Task;
use fw\core\base\View;

class TaskController extends AppController
{

    public function signupAction()
    {
        if (!empty($_POST)) {
            $task = new Task();
            $data = $_POST;
            $task->load($data);
            if (!$task->validate($data)) {
                $task->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }

            if ($task->save('task')) {
                $_SESSION['success'] = 'Вы успешно зарегистрированы';
            } else {
                $_SESSION['error'] = 'Ошибка! Попробуйте позже';
            }
            redirect();
        }
        View::setMeta('Регистрация');
    }

    public function loginAction()
    {
        if (!empty($_POST)) {
            $task = new Task();
            if ($task->login()) {
                $_SESSION['success'] = 'Вы успешно авторизованы';
            } else {
                $_SESSION['error'] = 'Логин/пароль введены неверно';
            }
            redirect();
        }
        View::setMeta('Вход');
    }

    public function logoutAction()
    {
        if (isset($_SESSION['task'])) unset($_SESSION['task']);
        redirect('/user/login');
    }

    public function taskAction()
    {
        if (!empty($_POST)) {
            $task = new Task();
            $data = $_POST;
            $img = $_FILES['image'];
            $task->attributes['image'] = $task->uploadImage($img);
                $task->load($data);
            if (!$task->validate($data)) {
                $task->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }


            if ($task->save('task')) {
                $_SESSION['success'] = 'Задачи получены';
            } else {
                $_SESSION['error'] = 'Ошибка! Попробуйте позже';
            }
            redirect();
        }
        View::setMeta('задача');
    }



}
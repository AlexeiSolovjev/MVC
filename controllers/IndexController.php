<?php
class IndexController{
    /**
     * показывает все записи из базы
     */
    public function index(){
        $students = new StudentsModel();
        include 'views/list.php';
    }

    /**
     * эта функция отображает форму редактирования / добавления записей
     */
    public function add(){

        $studentModel = new StudentsModel();
        /**
         * если массив POST не пустой - сохраняем данные
         */
        if ($_POST){
            $studentModel->save($_POST);
            header('Location: /?controller=index&action=index');
        }
        /**
         * если существует непустой ключ id, то получаем данные из базы по этому ключу
         */
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $student = $studentModel->getOne($_GET['id']);
        }
        include 'views/edit.php';

    }
    public function delete(){
        $studentModel = new StudentsModel();
        $studentModel->delete($_GET['id']);
        header('Location: /?controller=index&action=index');
    }

}
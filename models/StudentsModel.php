<?php
class StudentsModel {

    /**
     * конструктор класса-здесь - создается соединение с базой
     */
    public function __construct(){
        $this->db = mysqli_connect('localhost','root','','students');
    }

    /**
     * получаем все записи из базы
     * @return bool|mysqli_result
     */
    public function getAll(){
       return mysqli_query( $this->db, 'SELECT * FROM students', MYSQLI_USE_RESULT );
    }

    /**
     * получаем 1 запись по ее полю id
     * @param $id
     * @return array
     */
    public function getOne($id){
        $query = mysqli_query( $this->db, 'SELECT * FROM students WHERE id ='.$id , MYSQLI_USE_RESULT );
        return (array) $query->fetch_object();
    }

    /**
     * удаляем запись по ее id
     * @param $id
     * @return bool|mysqli_result
     */
    public function delete($id){
        addNotification( 'Message deleted', 'success');
        return mysqli_query( $this->db, 'DELETE FROM students WHERE id ='.$id  );
    }

    /**
     * сохраняем данные записи
     * @param $data
     */
    public function save ($data){
        if( empty( $data['name'] ) || empty( $data['surname']  ) || empty( $data['gender'] ) || empty( $data['age'] )|| empty( $data['group'] )|| empty( $data['department'] ) || empty( $data['city'] ) || empty( $data['country'] )){
            addNotification( 'Please populate all fields', 'error');
            return;
        }
        if (!isset($data['id'])){
            $query = "INSERT INTO `students` (`id`, `name`, `surname`, `gender`, `age`, `group`, `department`, `city`, `country`)
            VALUES (NULL, '".$data['name']."', '".$data['surname']."', '".$data['gender']."', '".$data['age']."', '".$data['group']."', '".$data['department']."', '".$data['city']."', '".$data['country']."');";
            addNotification( 'Entry was added to database', 'success');
        }else {
            addNotification( 'Entry was updated', 'success');
            $query = "UPDATE `students`.`students` SET `name` = '".$data['name']."', `surname` = '".$data['surname']."', `gender` = '".$data['gender']."', `age` = '".$data['age']."', `group` = '".$data['group']."', `department` = '".$data['department']."', `city` = '".$data['city']."', `country` = '".$data['country']."' WHERE `students`.`id` = ".$data['id'].";";
        }
        $this->db->query($query);
    }
}


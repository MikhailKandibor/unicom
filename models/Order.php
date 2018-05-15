<?php
class Order{

public static function getOrdersList()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        $result = $db->query('SELECT entry_course.id as id, users.email as email, users.username as username, users.lastname as lastname, users.phone as phone, courses.name as course_name, pay_status.name as pay_status, date, entry_status.name as status FROM entry_course left join users on entry_course.user_id=users.id left join courses on entry_course.course_id=courses.id left join entry_status on entry_course.status=entry_status.id left join pay_status on entry_course.pay_status=pay_status.id ORDER BY id DESC');
        $ordersList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $ordersList[$i]['id'] = $row['id'];
            $ordersList[$i]['email'] = $row['email'];
            $ordersList[$i]['fio'] = $row['username'].' '.$row['lastname'];
            $ordersList[$i]['phone'] = $row['phone'];
            $ordersList[$i]['course_name'] = $row['course_name'];
            $ordersList[$i]['pay_status'] = $row['pay_status'];
            $ordersList[$i]['date'] = $row['date'];
            $ordersList[$i]['status'] = $row['status'];
            $i++;
        }
        return $ordersList;
    }

    public static function getOrdersListById($id)
    {

       $id = intval($id);

        if($id){
        // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        $result = $db->query('SELECT entry_course.id as id, users.email as email, users.username as username, users.lastname as lastname, users.phone as phone, courses.id as course_id, courses.name as course_name, pay_status, date, entry_status.name as status FROM entry_course left join users on entry_course.user_id=users.id left join courses on entry_course.course_id=courses.id left join entry_status on entry_course.status=entry_status.id WHERE entry_course.id ='.$id);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $orderItem = $result->fetch();
        return $orderItem;
    }

        return $orderList;
}

    public static function getOrdersCoursesById($id)
    {

       $id = intval($id);

        if($id){
        // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        $result = $db->query('SELECT courses.id, courses.name, courses.category_id, courses.timeline, courses.price, courses.description, cat_courses.name as category_name FROM courses LEFT JOIN cat_courses on courses.category_id = cat_courses.id WHERE courses.id='.$id);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $orderCoursesItem = $result->fetch();
        return $orderCoursesItem;
    }

        return $orderCoursesList;
}


    public static function getOrdersListUser($id)
    {
       $id = intval($id);

        if($id){
            // Соединение с БД
            $db = Db::getConnection();
            // Получение и возврат результатов
            $result = $db->query('SELECT entry_course.id as id, entry_course.course_id, entry_course.user_id, pay_status.name as pay_status, entry_course.pay_status as id_pay_status, courses.name as name_course, courses.price as price, entry_course.date as date_join FROM entry_course LEFT JOIN courses on  entry_course.course_id = courses.id LEFT JOIN pay_status on  pay_status.id = entry_course.pay_status WHERE entry_course.user_id ='.$id);
           $ordersListUser = array();
            $i = 0;
                while ($row = $result->fetch()) {
                    $ordersListUser[$i]['id'] = $row['id'];
                    $ordersListUser[$i]['name_course'] = $row['name_course'];
                    $ordersListUser[$i]['price'] = $row['price'];
                    $ordersListUser[$i]['pay_status'] = $row['pay_status'];
                    $ordersListUser[$i]['id_pay_status'] = $row['id_pay_status'];
                    $ordersListUser[$i]['date'] = $row['date_join'];
                    $i++;
                }
        return $ordersListUser;
        }
    }

    public static function updatePayStatus($id, $payStatus){
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE entry_course 
            SET pay_status = :payStatus
            WHERE id = :id";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':payStatus', $payStatus, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function deleteOrdersListUser($id){
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'DELETE FROM entry_course WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


}
?>
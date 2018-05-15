<?php

class AdminOrderController extends AdminBase
{
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список заказов
        $ordersList = Order::getOrdersList();
        // Подключаем вид
        require_once(ROOT . '/views/admin/order/index.php');
        return true;
    }

        public function actionView($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список заказов
        
        $ordersList = Order::getOrdersListById($id);
        $ordersCoursesList = Order::getOrdersCoursesById($ordersList['course_id']);

        // Подключаем вид
        require_once(ROOT . '/views/admin/order/view.php');
        return true;
    }



}
?>
<?php
class CabinetController{

	public function actionIndex(){
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);

        // Заполняем переменные для полей формы
        $name = $user['username'];
        $lastname = $user['lastname'];
        $phone = $user['phone'];
        // Флаг результата
        $result = false;
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $phone = $_POST['phone'];
            // Флаг ошибок
            $errors = false;
            // Валидируем значения
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkPhone($phone)) {
                $errors[] = 'Телефон не должен быть короче 10-ти символов';
            }
            if ($errors == false) {
                // Если ошибок нет, сохраняет изменения профиля
                $result = User::edit($userId, $name, $lastname, $phone);
            }
        }


        // Получаем список курсов конкретного пользователя
        $ordersListUser = Order::getOrdersListUser($userId);


        
        // Подключаем вид
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    
	}

    public function actionResult(){

        
            $dataSet = $_POST;


            if (!$dataSet)
                $payStatus = 2;


            unset($dataSet['ik_sign']); // удаляем из данных строку подписи
            ksort($dataSet, SORT_STRING); // сортируем по ключам в алфавитном порядке элементы массива
            array_push($dataSet, '4L6jZKkktHYatVJn'); // добавляем в конец массива "секретный ключ"
            $signString = implode(':', $dataSet); // конкатенируем значения через символ ":"
            $sign = base64_encode(md5($signString, true)); // берем MD5 хэш в бинарном виде по сформированной строке и кодируем в BASE64


            if ($sign != $_POST['ik_sign'])
                $payStatus = 2;

            $payStatus = 1;

            Order::updatePayStatus($_POST[ik_x_id], $payStatus);


        return $sign;
    }

    public function actionDelete($id)
    {
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        if ($id) {
            // Удаляем товар
            Order::deleteOrdersListUser($id);
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /cabinet/");
        }
    return true;
    }	

}
?>
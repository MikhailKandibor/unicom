<?php

class UserController {

	public function actionRegister(){
            $name = '';
            $lastname = '';
            $email = '';
            $phone = '';
            $password = '';
            $password_r = '';
			$result = false;

			if (isset($_POST['submit'])){
                $name = $_POST['name'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $password = $_POST['password'];
                $password_r = $_POST['password-2'];

				$errors = false;

                $url_google = 'https://www.google.com/recaptcha/api/siteverify';
                $key = '6Le1JFkUAAAAAOugtH8T2rammDerXVigYzigQPwA';
                $recaptcha = $_POST['g-recaptcha-response'];
                $ip = $_SERVER['REMOTE_ADDR'];
                $query_google = $url_google.'?secret='.$key.'&response='.$recaptcha.'&remoteip='.$ip;

                $curl = curl_init();

                curl_setopt($curl, CURLOPT_URL, $query_google);
                // Запрещаем проверку правильность сертификата
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
                 curl_setopt($curl, CURLOPT_POST, true);

                $res_captcha = curl_exec($curl);

                curl_close($curl);

                $res_captcha_n = json_decode($res_captcha);

                if (!$_POST['g-recaptcha-response']) {
                    $errors[] = 'Заполните каптчу';
                }
				if(!User::checkName($name)) {
					$errors[] = 'Имя не должно быть короче 2-х символов';
				}
				if(!User::checkEmail($email)) {
					$errors[] = 'Неправильный email';
				}
                if (!User::checkPhone($phone)) {
                    $errors[] = 'Телефон не должен быть короче 10-ти символов';
                }
				if($password != $password_r) {
					$errors[] = 'Пароли не совпадают';
				}
                if(!User::checkPassword($password)) {
                    $errors[] = 'Пароль не должен быть короче 6-ти символов';
                }
				if(User::checkEmailExists($email)){
					$errors[] = 'Такой email уже используется';
				}
                if (User::checkPhoneExists($phone)) {
                    $errors[] = 'Такой телефон уже используется';
                }

				if($errors == false){
					$result = User::register($name, $lastname, $email, $phone, $password);
                    $userId = User::checkUserData($email, $password);
                    User::auth($userId);
				}

			}

			require_once(ROOT.'/views/user/register.php');

			return true;
	}

 public function actionLogin()
    {
        // Переменные для формы
        $email = '';
        $password = '';
        $result = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $email = $_POST['email'];
            $password = $_POST['password'];
            // Флаг ошибок
            $errors = false;



            $url_google = 'https://www.google.com/recaptcha/api/siteverify';
                $key = '6Le1JFkUAAAAAOugtH8T2rammDerXVigYzigQPwA';
                $recaptcha = $_POST['g-recaptcha-response'];
                $ip = $_SERVER['REMOTE_ADDR'];
                $query_google = $url_google.'?secret='.$key.'&response='.$recaptcha.'&remoteip='.$ip;

                $curl = curl_init();

                curl_setopt($curl, CURLOPT_URL, $query_google);
                // Запрещаем проверку правильность сертификата
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
                 curl_setopt($curl, CURLOPT_POST, true);

                $res_captcha = curl_exec($curl);

                curl_close($curl);

                $res_captcha_n = json_decode($res_captcha);

                if (!$_POST['g-recaptcha-response']) {
                    $errors[] = 'Заполните каптчу';
                }


            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                if($errors == false){
                    $result = User::auth($userId);
                }
                // Перенаправляем пользователя в закрытую часть - кабинет 
            }
        }
        // Подключаем вид
        require_once(ROOT . '/views/user/login.php');
        return true;
    }

	    public function actionLogout(){
        // Стартуем сессию
        
        // Удаляем информацию о пользователе из сессии
        unset($_SESSION["user"]);
        
        // Перенаправляем пользователя на главную страницу
        header("Location: /");
    }

}
?>
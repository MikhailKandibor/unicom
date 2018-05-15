<?php

class ContactController
{
		public function actionIndex()
		{

		//$userId = User::checkLogged();
        // Получаем информацию о пользователе из БД
        //$user = User::getUserById($userId);
			
			$name = '';
			$lastname = '';
			$email = '';
			$phone = '';
			$message = '';
			$result = false;

			if (isset($_POST['submit'])){

	if(isset($_SESSION['user'])) { 
                $userId = User::checkLogged();
                // Получаем информацию о пользователе из БД
                $user = User::getUserById($userId);
				$name = $user['username'];
				$lastname = $user['lastname'];
				$email = $user['email'];
				$phone = $user['phone'];
              } else {

				$name = $_POST['name'];
				$lastname = $user['lastname'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
		};



				$message = $_POST['message'];

				$errors = false;

				if(!User::checkName($name)) {
					$errors[] = 'Имя не должно быть короче 2-х символов';
				}

				if(!User::checkEmail($email)) {
					$errors[] = 'Неправильный email';
				}

				if(!User::checkPhone($phone)) {
					$errors[] = 'Номер телефона не должен быть короче 10-ти символов';
				}

				if($errors == false){
					$result = Contact::addMessage($name, $email, $phone, $message);
				}

			}


			require_once(ROOT.'/views/contact/index.php');
			
			return true;
		}


}

<?php

class AdminController extends AdminBase{

	public function actionIndex(){
		// Проверка доступа
		self::checkAdmin();

		// Подключение вида
		require_once(ROOT.'/views/admin/index.php');
			
		return true;
	}

	public function actionViewListUsers(){
		// Проверка доступа
		self::checkAdmin();

			$usersList = array();
			$usersList = User::getListUser();

		// Подключение вида
		require_once(ROOT.'/views/admin/users.php');
			
		return true;
	}

	public function actionViewListContactMessage(){
		// Проверка доступа
		self::checkAdmin();

			$messageList = array();
			$messageList = Contact::getListContactMessage();

		// Подключение вида
		require_once(ROOT.'/views/admin/contact.php');
			
		return true;
	}


}

?>
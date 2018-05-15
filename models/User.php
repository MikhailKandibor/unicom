<?php

class User{

	public static function register($name, $lastname, $email, $phone, $password){
		$db = Db::getConnection();

		$sql = 'INSERT INTO users (username, lastname, password, email, phone) VALUES (:name, :lastname, :password, :email, :phone)';
		
		$password = md5($password);
		$result = $db->prepare($sql);
		$result->bindParam(':name', $name, PDO::PARAM_STR);
		$result->bindParam(':lastname', $lastname, PDO::PARAM_STR);
		$result->bindParam(':password', $password, PDO::PARAM_STR);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->bindParam(':phone', $phone, PDO::PARAM_STR);

		return $result->execute();
	}

	public static function checkName($name){
		if (strlen($name) >= 2){
			return true;
		}
		return false;
	}

	public static function checkPassword($password){
		if (strlen($password) >= 6) {
			return true;
		}
		return false;
	}

	public static function checkEmail($email) {
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;
		}
		return false;
	}

	public static function checkEmailExists($email) {
		$db = Db::getConnection();

		$sql = 'SELECT COUNT(*) FROM users WHERE email = :email';

		$result = $db->prepare($sql);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->execute();

		if($result->fetchColumn())
			return true;
		return false;

	}

	public static function checkPhoneExists($phone) {
		$db = Db::getConnection();

		$sql = 'SELECT COUNT(*) FROM users WHERE phone = :phone';

		$result = $db->prepare($sql);
		$result->bindParam(':phone', $phone, PDO::PARAM_STR);
		$result->execute();

		if($result->fetchColumn())
			return true;
		return false;

	}

	//Проверяем существует ли пользователь с задаными email и password
	public static function checkUserData($email, $password){


		$db = Db::getConnection();

		$sql = 'SELECT * FROM users WHERE email = :email AND password = :password';


		$password = md5($password);
		$result = $db->prepare($sql);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->bindParam(':password', $password, PDO::PARAM_STR);
		$result->execute();

		$user = $result->fetch();
		if($user) {
			return $user['id'];
		}

		return false;

	}

	public static function auth($userId){
		$_SESSION['user'] = $userId;
        return true;
	}

	public static function checkLogged()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        
        header("Location: /user/login");
	}

    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }


     public static function getUserById($id)
    {
    	if($id){
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'SELECT * FROM users WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();


        return $result->fetch();
    }
    }

    public static function checkPhone($phone)
    {
        if (strlen($phone) >= 10) {
            return true;
        }
        return false;
    }

    public static function edit($id, $name, $lastname, $phone)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE users 
            SET username = :name, phone = :phone, lastname = :lastname
            WHERE id = :id";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);

        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        return $result->execute();
    }

         public static function getListUser()
    {
    	
        // Соединение с БД
        $db = Db::getConnection();
		$usersList = array();
        // Текст запроса к БД
        $result = $db->query('SELECT * FROM users');
  
		$i = 0;
		while ($row = $result->fetch()) {
			$usersList[$i]['id'] = $row['id'];
			$usersList[$i]['email'] = $row['email'];
			$usersList[$i]['username'] = $row['username'];
			$usersList[$i]['lastname'] = $row['lastname'];
			$usersList[$i]['phone'] = $row['phone'];
			$usersList[$i]['join_date'] = $row['join_date'];
			$usersList[$i]['role'] = $row['role'];
			$i++;
		}

		return $usersList;

	}


}







?>
<?php

class Contact{

	public static function addMessage($name, $email, $phone, $message){

		$db = Db::getConnection();

		$sql = 'INSERT INTO contact_message (username, email, phone, message, date) VALUES (:name, :email, :phone, :message, now())';


		$result = $db->prepare($sql);
		$result->bindParam(':name', $name, PDO::PARAM_STR);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->bindParam(':phone', $phone, PDO::PARAM_STR);
		$result->bindParam(':message', $message, PDO::PARAM_STR);

		return $result->execute();
	}

         public static function getListContactMessage()
    {
    	
        // Соединение с БД
        $db = Db::getConnection();
		$messageList = array();
        // Текст запроса к БД
        $result = $db->query('SELECT * FROM contact_message');
  
		$i = 0;
		while ($row = $result->fetch()) {
			$messageList[$i]['id'] = $row['id'];
			$messageList[$i]['username'] = $row['username'];
			$messageList[$i]['email'] = $row['email'];
			$messageList[$i]['phone'] = $row['phone'];
			$messageList[$i]['date'] = $row['date'];
			$messageList[$i]['message'] = $row['message'];
			$i++;
		}

		return $messageList;

	}

}
?>
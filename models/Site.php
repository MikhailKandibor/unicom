<?php

class Site{

	// Возвращает массив с новостями
	public static function getNewsList(){
		$db = Db::getConnection();
		$newsList = array();
		$result = $db->query('SELECT id, title, description, users, date ' 
			. 'FROM news '
			. 'ORDER BY date DESC '
			. 'LIMIT 4');
		$i = 0;
		while ($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['description'] = $row['description'];
			$newsList[$i]['users'] = $row['users'];
			$newsList[$i]['date'] = $row['date'];
			$i++;
		}
		return $newsList;
	}


}







?>
<?php

class CategoryNews{

	public static function getCategoryNewsList(){

		$db = Db::getConnection();

		$result = $db->query('SELECT id, name FROM cat_news ORDER BY sort_order ASC');

		$i = 0;
		while ($row = $result->fetch()) {
			$categoryNewsList[$i]['id'] = $row['id'];
			$categoryNewsList[$i]['name'] = $row['name'];
			$i++;
		}
		return $categoryNewsList;
	}

	public static function getCategoryNewsListAdmin(){

		$db = Db::getConnection();

		$result = $db->query('SELECT * FROM cat_news ORDER BY id ASC');

		$i = 0;
		while ($row = $result->fetch()) {
			$categoryNewsList[$i]['id'] = $row['id'];
			$categoryNewsList[$i]['name'] = $row['name'];
            $categoryNewsList[$i]['sort_order'] = $row['sort_order'];
            $categoryNewsList[$i]['status'] = $row['status'];
			$i++;
		}
		return $categoryNewsList;
	}

	public static function getCategoryNewsListAdminById($id){

		$id = intval($id);

		if($id){

		$db = Db::getConnection();

		$result = $db->query('SELECT * FROM cat_news WHERE id=' . $id);
		$result->setFetchMode(PDO::FETCH_ASSOC);

		$categoryItem = $result->fetch();

		return $categoryItem;
	}
		return $categoryList;
	}	

	public static function updateCategoryNewsById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE cat_news
            SET 
                name = :name, 
                sort_order = :sort_order, 
                status = :status
            WHERE id = :id";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':sort_order', $options['sort_order'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }

	public static function createCategoryNews($options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO cat_news '
                . '(name, sort_order, status)'
                . 'VALUES '
                . '(:name, :sort_order, :status)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':sort_order', $options['sort_order'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_STR);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }

	public static function deleteCategoryNewsById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'DELETE FROM cat_news WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }



}


?>
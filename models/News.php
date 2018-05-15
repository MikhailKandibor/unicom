<?php

class News{


	const SHOW_BY_DEFAULT = 5;

	// Возвращает данные одной новости в соответствии с идентификатором
	public static function getNewsItemById($id) {

		$id = intval($id);

		if($id){

		$db = Db::getConnection();

		$result = $db->query('SELECT * from news WHERE id=' . $id); 
		$result->setFetchMode(PDO::FETCH_ASSOC);

		$newsItem = $result->fetch();

		return $newsItem;

		
	}

		return $newsList;


	}


	// Возвращает массив с новостями
	public static function getNewsList(){
		
		
		$db = Db::getConnection();

		$newsList = array();

		$result = $db->query('SELECT news.id as id, title, cat_news.name as category_id, description, texts, users, date, news.status FROM news ' 
			. 'left join cat_news on cat_news.id=news.category_id '
			. 'ORDER BY date DESC '
			. 'LIMIT 5');


		$i = 0;
		while ($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['category_id'] = $row['category_id'];
			$newsList[$i]['description'] = $row['description'];
			$newsList[$i]['texts'] = $row['texts'];
			$newsList[$i]['users'] = $row['users'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['status'] = $row['status'];
			$i++;
		}

		return $newsList;

	}

	// Возвращает массив с новостями
	public static function getNewsListByCategory($categoryId = false, $page = 1){
		
	if($categoryId){
		
		$page = intval($page);
		$offset = ($page - 1) * self::SHOW_BY_DEFAULT;		

		$db = Db::getConnection();

		$newsList = array();


		$result = $db->query('SELECT id, title, category_id, description, texts, users, date ' 
			. 'FROM news '
			. "WHERE status = '1' and category_id = '$categoryId' "
			. 'ORDER BY id ASC '
			. 'LIMIT '.self::SHOW_BY_DEFAULT
			.' OFFSET '. $offset);

		$i = 0;
		while ($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['description'] = $row['description'];
			$newsList[$i]['texts'] = $row['texts'];
			$newsList[$i]['users'] = $row['users'];
			$newsList[$i]['date'] = $row['date'];
			$i++;
		}

		return $newsList;

	}
}

	public static function getTotalNewsInCategory($categoryId){
		$db = Db::getConnection();

		$result = $db->query('SELECT count(id) AS count FROM news WHERE status = "1" and category_id ="'.$categoryId.'"');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$row = $result->fetch();

		return $row['count'];
	}



	    public static function updateNewsById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE news
            SET 
                title = :title, 
                category_id = :category_id, 
                description = :description,  
                texts = :texts, 
                status = :status
            WHERE id = :id";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':texts', $options['texts'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }

    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-image.png';
        // Путь к папке с товарами
        $path = '/upload/images/news/';
        // Путь к изображению товара
        $pathToProductImage = $path . $id . '.jpg';
        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }
        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }

   public static function createNews($options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO news '
                . '(title, category_id, description, texts, '
                . 'users, status)'
                . 'VALUES '
                . '(:title, :category_id, :description, :texts, '
                . ':users, :status)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':texts', $options['texts'], PDO::PARAM_STR);
        $result->bindParam(':users', $options['users'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }

	public static function deleteNewsById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'DELETE FROM news WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


}







?>
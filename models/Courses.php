<?php

class Courses{

	const SHOW_BY_DEFAULT = 1;

	public static function entryCourse($userId, $courseId){

		$db = Db::getConnection();

		$sql = 'INSERT INTO entry_course (course_id, user_id) VALUES (:course_id, :user_id)';
		
		$result = $db->prepare($sql);
		$result->bindParam(':course_id', $courseId, PDO::PARAM_STR);
		$result->bindParam(':user_id', $userId, PDO::PARAM_STR);

		return $result->execute();
	}

	// Возвращает данные одной новости в соответствии с идентификатором
	public static function getCoursesItemById($id) {

		$id = intval($id);

		if($id){

		$db = Db::getConnection();

		$result = $db->query('SELECT courses.id, courses.name, cat_courses.name as catname, courses.price, courses.category_id, courses.timeline, courses.description, courses.status from courses left join cat_courses on courses.category_id=cat_courses.id WHERE courses.id = ' . $id); 
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$coursesItem = $result->fetch();

		return $coursesItem;

		
	}

		return $coursesList;


	}


	// Возвращает массив с новостями
	public static function getCoursesList($count = self::SHOW_BY_DEFAULT){

		$count = intval($count);
		
		$db = Db::getConnection();

		$coursesList = array();

		$result = $db->query('SELECT courses.id, courses.name, courses.category_id, cat_courses.name as catname, courses.price, courses.timeline, courses.description, courses.status ' 
			. 'FROM courses '
			. 'LEFT JOIN cat_courses ON courses.category_id=cat_courses.id '
			. 'ORDER BY courses.id DESC '
			. 'LIMIT '.$count);

		$i = 0;
		while ($row = $result->fetch()) {
			$coursesList[$i]['id'] = $row['id'];
			$coursesList[$i]['name'] = $row['name'];
			$coursesList[$i]['category_id'] = $row['category_id'];
			$coursesList[$i]['catname'] = $row['catname'];
			$coursesList[$i]['price'] = $row['price'];
			$coursesList[$i]['timeline'] = $row['timeline'];
			$coursesList[$i]['description'] = $row['description'];
			$coursesList[$i]['status'] = $row['status'];
			$i++;
		}

		return $coursesList;

	}


// Возвращает массив с новостями
	public static function getCoursesListByCategory($categoryId = false, $page = 1){

		if($categoryId){

			$page = intval($page);
			$offset = ($page - 1) * self::SHOW_BY_DEFAULT;	
		
		$db = Db::getConnection();
		$coursesList = array();

		$result = $db->query("SELECT id, name, category_id, price, timeline, description, status " 
			. "FROM courses "
			. "WHERE status = '1' and category_id = '$categoryId' "
			. "ORDER BY id DESC "
			. 'LIMIT '.self::SHOW_BY_DEFAULT
			.' OFFSET '. $offset);
		$i = 0;
		while ($row = $result->fetch()) {
			$coursesList[$i]['id'] = $row['id'];
			$coursesList[$i]['name'] = $row['name'];
			$coursesList[$i]['category_id'] = $row['category_id'];
			$coursesList[$i]['price'] = $row['price'];
			$coursesList[$i]['timeline'] = $row['timeline'];
			$coursesList[$i]['description'] = $row['description'];
			$coursesList[$i]['status'] = $row['status'];
			$i++;
		}

		return $coursesList;

	}

}


	public static function getTotalCoursesInCategory($categoryId){
		$db = Db::getConnection();

		$result = $db->query('SELECT count(id) AS count FROM courses WHERE status = "1" and category_id ="'.$categoryId.'"');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$row = $result->fetch();

		return $row['count'];
	}

	public static function deleteCoursesById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'DELETE FROM courses WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

     public static function createCourses($options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO courses '
                . '(name, category_id, price, timeline, '
                . 'description, status)'
                . 'VALUES '
                . '(:name, :category_id, :price, :timeline, '
                . ':description, :status)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':timeline', $options['timeline'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }

    public static function updateCoursesById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE courses
            SET 
                name = :name, 
                category_id = :category_id, 
                price = :price,  
                timeline = :timeline, 
                description = :description, 
                status = :status
            WHERE id = :id";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':timeline', $options['timeline'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }

    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-image.png';
        // Путь к папке с товарами
        $path = '/upload/images/courses/';
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

}
?>
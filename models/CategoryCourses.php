<?php

class CategoryCourses{

	public static function getCategoryCoursesList(){

		$db = Db::getConnection();

		$result = $db->query('SELECT id, name FROM cat_courses ORDER BY sort_order ASC');

		$i = 0;
		while ($row = $result->fetch()) {
			$categoryCoursesList[$i]['id'] = $row['id'];
			$categoryCoursesList[$i]['name'] = $row['name'];
			$i++;
		}
		return $categoryCoursesList;
	}

	 public static function getCategoryCoursesListAdmin()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Запрос к БД
        $result = $db->query('SELECT id, name, sort_order, status FROM cat_courses ORDER BY sort_order ASC');
        // Получение и возврат результатов
        $categoryCoursesList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryCoursesList[$i]['id'] = $row['id'];
            $categoryCoursesList[$i]['name'] = $row['name'];
            $categoryCoursesList[$i]['sort_order'] = $row['sort_order'];
            $categoryCoursesList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryCoursesList;
    }

        public static function getCategoryCoursesListAdminById($id){

        $id = intval($id);

        if($id){

        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM cat_courses WHERE id=' . $id);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $categoryItem = $result->fetch();

        return $categoryItem;
    }
        return $categoryList;
    }   

    public static function updateCategoryCoursesById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE cat_courses
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

    public static function createCategoryCourses($options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO cat_courses '
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

    public static function deleteCategoryCoursesById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'DELETE FROM cat_courses WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }



}


?>
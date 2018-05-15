<?php

class CoursesController
{
	public function actionIndex()
		{
			$categories = array();
			$categories = CategoryCourses::getCategoryCoursesList();

			$coursesList = array();
			$coursesList = Courses::getCoursesList(10);

			require_once(ROOT.'/views/courses/index.php');

			return true;
		}

	public function actionCategory($categoryId, $page = 1)
		{
			$categories = array();
			$categories = CategoryCourses::getCategoryCoursesList();

			$categoryCourses = array();
			$categoryCourses = Courses::getCoursesListByCategory($categoryId, $page);

			$total = Courses::GetTotalCoursesInCategory($categoryId);

			$pagination = new Pagination($total, $page, Courses::SHOW_BY_DEFAULT, 'page-');

			require_once(ROOT.'/views/courses/category.php');

			return true;
		}

	//Просмотр одного курса
	public function actionView($id)
		{
			// Получаем массив категорий курсов
			$categories = array();
			$categories = CategoryCourses::getCategoryCoursesList();
			
			if($id) {
				// Получаем всю информацию по одному курсу
				$coursesItem = Courses::getCoursesItemById($id);

				// Проверяем, является ли пользователь гостем
				$isGuest = User::isGuest();

				if($isGuest != true) {
				// Проверяем авторизован ли пользователь
					$userId = User::checkLogged();
                // Получаем информацию о пользователе из БД
					$user = User::getUserById($userId);
				}

				$result = false;

				// Условие если была отправлена форма записи на курс
				if (isset($_POST['entryCourse-submit'])){
					// Присваиваем значение переменным
	                $userId = $_POST['userId'];
	                $courseId = $_POST['courseId'];
	                // Обнуляем ошибки
					$errors = false;

					if($errors == false){
						//Обращаемся к методу entryCourse в модели Courses
						$result = Courses::entryCourse($userId, $courseId);
					}
				}
				// Подключаем представление страницы
				require_once(ROOT.'/views/courses/course.php');
			}
			return true;
		}

}

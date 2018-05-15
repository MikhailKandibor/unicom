<?php

class NewsController {

	// Выводим список новостей на главной странице раздела новости
	public function actionIndex()
		{
			// Получаем список категорий, чтобы вывести их в представлении
			$categories = array();
			$categories = CategoryNews::getCategoryNewsList();

			// Получаем список новостей
			$newsList = array();
			$newsList = News::getNewsList();

			// Подключаем представление
			require_once(ROOT.'/views/news/index.php');

			return true;
		}


	//Просмотр одной новости
	public function actionView($id)
		{
			if($id) {
				$newsItem = News::getNewsItemById($id);

				require_once(ROOT.'/views/news/post.php');

			}

			return true;
		}


	public function actionCategory($categoryId, $page = 1)
		{


			$categories = array();
			$categories = CategoryNews::getCategoryNewsList();

			$categoryNews = array();
			$categoryNews = News::getNewsListByCategory($categoryId, $page);

			$total = News::GetTotalNewsInCategory($categoryId);

			$pagination = new Pagination($total, $page, News::SHOW_BY_DEFAULT, 'page-');

			require_once(ROOT.'/views/news/category.php');

			return true;
		}


}

?>

<?php


class AdminNewsController extends AdminBase
{
    /**
     * Action для страницы "Управление курсами"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список товаров
		$newsList = News::getNewsList(10);
        // Подключаем вид
		require_once(ROOT.'/views/admin/news/index.php');
        return true;
    }    

    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();
        $categories = CategoryNews::getCategoryNewsListAdmin();

			// Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['title'] = $_POST['title'];
            $options['category_id'] = $_POST['category_id'];
            $options['description'] = $_POST['description'];
            $options['texts'] = $_POST['texts'];
            $options['users'] = $_POST['users'];
            $options['status'] = $_POST['status'];

 			// Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['title']) || empty($options['title'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = News::createNews($options);
                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/news/{$id}.jpg");
                    }
                };
                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/news");
            }
        }
        // Получаем список товаров
        // Подключаем вид
		require_once(ROOT.'/views/admin/news/create.php');
        return true;
    }

    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список категорий для выпадающего списка
        $categories = CategoryNews::getCategoryNewsListAdmin();
        // Получаем данные о конкретном курсе
        $newsItem = News::getNewsItemById($id);
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['title'] = $_POST['title'];
            $options['category_id'] = $_POST['category_id'];
            $options['description'] = $_POST['description'];
            $options['texts'] = $_POST['texts'];
            $options['status'] = $_POST['status'];
            // Сохраняем изменения
            if (News::updateNewsById($id, $options)) {
                // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                   move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/news/{$id}.jpg");
                }
            }
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/news");
        }
        // Подключаем вид
		require_once(ROOT.'/views/admin/news/update.php');
        return true;
    }


    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список товаров// Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            News::deleteNewsById($id);
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/news");
        }
        // Подключаем вид
		require_once(ROOT.'/views/admin/news/delete.php');
        return true;
    }


    public function actionIndexCategory()
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список товаров
        $categoryList = CategoryNews::getCategoryNewsListAdmin();
        // Подключаем вид
        require_once(ROOT.'/views/admin/news/category/index.php');
        return true;
    } 

public function actionUpdateCategory($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список категорий для выпадающего списка
        $categoryItem = CategoryNews::getCategoryNewsListAdminById($id);
        // Получаем данные о конкретном курсе
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['name'] = $_POST['name'];
            $options['sort_order'] = $_POST['sort_order'];
            $options['status'] = $_POST['status'];
            // Сохраняем изменения
            CategoryNews::updateCategoryNewsById($id, $options);
                
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/news/category");
        }
        // Подключаем вид
        require_once(ROOT.'/views/admin/news/category/update.php');
        return true;
    }

    public function actionCreateCategory()
    {
        // Проверка доступа
        self::checkAdmin();

            // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['sort_order'] = $_POST['sort_order'];
            $options['status'] = $_POST['status'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = CategoryNews::createCategoryNews($options);
                // Если запись добавлена

                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/news/category");
            }
        }
        // Получаем список товаров
        // Подключаем вид
        require_once(ROOT.'/views/admin/news/category/create.php');
        return true;
    }

    public function actionDeleteСategory($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список товаров// Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            CategoryNews::deleteCategoryNewsById($id);
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/news/category");
        }
        // Подключаем вид
        require_once(ROOT.'/views/admin/news/category/delete.php');
        return true;
    }
}

?>